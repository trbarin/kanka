@extends('layouts.' . (request()->ajax() ? 'ajax' : 'app'), [
    'title' => __('entities/aliases.create.title', ['name' => $entity->name]),
    'description' => '',
    'breadcrumbs' => [
        ['url' => $entity->url('index'), 'label' => __($entity->pluralType() . '.index.title')],
        ['url' => $entity->url('show'), 'label' => $entity->name],
        ['url' => route('entities.assets', $entity->id), 'label' => __('crud.tabs.assets')],
    ]
])

@section('content')
    {!! Form::open(['route' => ['entities.entity_aliases.store', $entity], 'method' => 'POST', 'data-shortcut' => 1]) !!}
    <div class="panel panel-default">
        @if (request()->ajax())
            <div class="panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('crud.delete_modal.close') }}"><span aria-hidden="true">&times;</span></button>
                <h4>
                    {{ __('entities/aliases.create.title', ['name' => $entity->name]) }}
                </h4>
        </div>
        @endif
        <div class="panel-body">
            @include('partials.errors')

            <p class="help-block">
                {{ __('entities/aliases.helpers.primary') }}
            </p>

            @include('entities.pages.aliases._form')

        </div>
        <div class="panel-footer text-right">
                <button class="btn btn-success">{{ __('crud.save') }}</button>
                @includeWhen(!request()->ajax(), 'partials.or_cancel')

        </div>
    </div>
    {!! Form::close() !!}
@endsection