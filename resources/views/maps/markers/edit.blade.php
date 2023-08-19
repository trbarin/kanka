<?php
/**
* @var \App\Models\Map $map
* @var \App\Models\MapMarker $model
*/
?>
@extends('layouts.' . (request()->ajax() ? 'ajax' : 'app'), [
    'title' => __('maps/markers.edit.title', ['name' => $model->name]),
    'breadcrumbs' => [
        ['url' => Breadcrumb::index('maps'), 'label' => \App\Facades\Module::plural(config('entities.ids.map'), __('entities.maps'))],
        ['url' => $map->entity->url(), 'label' => $map->name],
        __('maps/markers.edit.title', ['name' => $model->name])
    ]
])

@section('content')
    <x-box>
        @if (request()->ajax())
            <div class="modal-heading">
                <x-dialog.close />
                <h4>
                    {{ __('maps/markers.edit.title', ['name' => $model->name]) }}
                </h4>
            </div>
        @endif
        @if (!$map->explorable())
            <x-alert type="warning">
                <p>{{ __('maps.helpers.missing_image') }}</p>
            </x-alert>
        @else
            <div class="map mb-4" id="map{{ $map->id }}" style="width: 100%; height: 100%;"></div>
            @include('partials.errors')

            {!! Form::model($model, ['route' => ['maps.map_markers.update', $campaign, 'map' => $map, 'map_marker' => $model], 'method' => 'PATCH', 'id' => 'map-marker-form', 'class' => 'ajax-subform', 'data-shortcut' => 1, 'data-maintenance' => 1]) !!}
            @include('maps.markers._form')

            <x-box.footer>
                <div class="submit-group">
                    <div class="inline-block">
                        <x-button.delete-confirm target="#delete-marker-confirm-form-{{ $model->id}}" />
                    </div>
                    <input id="submit-mode" type="hidden" value="true"/>
                    <div class="pull-right">
                        @include('maps.markers._actions')
                    </div>
                    <div class="pull-right mr-2">
                        @include('partials.footer_cancel', ['ajax' => null])
                    </div>
                </div>
            </x-box.footer>
            {!! Form::close() !!}
            @endif
    </x-box>

    {!! Form::open([
        'method' => 'DELETE',
        'route' => ['maps.map_markers.destroy', $campaign, $model->map_id, $model->id],
        'style' => 'display:inline',
        'id' => 'delete-marker-confirm-form-' . $model->id]) !!}
    {!! Form::close() !!}


@endsection

@if ($map->explorable())
@section('scripts')
    @parent
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
    <script src="{{ config('app.asset_url') }}/vendor/leaflet/leaflet.markercluster.js"></script>
    <script src="{{ config('app.asset_url') }}/vendor/leaflet/leaflet.markercluster.layersupport.js"></script>
    <script src="{{ config('app.asset_url') }}/vendor/leaflet/leaflet.path.drag.js"></script>
    <script src="{{ config('app.asset_url') }}/vendor/leaflet/leaflet.editable.js"></script>
    @vite([
        'resources/js/location/map-v3.js',
    ])

    @include('maps._setup', ['single' => true, 'editable' => true])
    <script type="text/javascript">
        var labelShapeIcon = new L.Icon({
            iconUrl: '/images/transparent.png',
            iconSize: [150, 35],
            iconAnchor: [75, 15],
            popupAnchor: [0, -20],
        });

        var marker{{ $model->id }} = {!! $model->editing()->multiplier($map->is_real)->marker() !!}.addTo(map{{ $map->id }});
        window.polygon = marker{{ $model->id }};
        window.polygon.enableEdit();
        window.polygon.on('editable:dragend', markerUpdateHandler);
        window.polygon.on('editable:vertex:dragend', markerUpdateHandler);
        window.polygon.on('editable:vertex:dragend', markerUpdateHandler);

        window.map = map{{ $map->id }};

        function markerUpdateHandler(data) {
            window.markerUpdateHandler(data)
        }
    </script>
@endsection

@section('styles')
    @parent
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    @vite('resources/sass/map-v3.scss')

    <style>
        .marker-{{ $model->id }} {
            @if (!empty($model->font_colour))color: {{ $model->font_colour }};
            @endif
        }

        @if ($model->entity && $model->icon == 4).marker-{{ $model->id }} .marker-pin::after {
            background-image: url('{{ $model->entity->child->thumbnail(400) }}');
            @if (!empty($model->pin_size))width: {{ $model->pinSize(false) - 4 }}px;
            height: {{ $model->pinSize(false) - 4 }}px;
            margin: 2px 0 0 -{{ ceil(($model->pinSize(false) - 4) / 2) }}px;
            @endif
        }

        @endif

        @if (!empty($model->pin_size)).marker-{{ $model->id }} .marker-pin {
            width: {{ $model->pinSize() }};
            height: {{ $model->pinSize() }};
            margin: -{{ $model->pinSize(false) / 2 }}px 0 0 -{{ $model->pinSize(false) / 2 }}px;
        }

        .marker-{{ $model->id }} i {
            font-size: {{ $model->pinSize(false) / 2 }}px;
        }

        @endif

    </style>
@endsection
@endif
