@extends('layouts.app', [
    'title' => __('campaigns/import.title') . ' - ' . $campaign->name,
    'breadcrumbs' => [
        __('campaigns.show.tabs.import')
    ],
    'canonical' => true,
    'mainTitle' => false,
    'sidebar' => 'campaign',
    'centered' => true,
])

@section('content')
    <div class="flex gap-5 flex-col">
        @include('partials.ads.top')
        @include('partials.errors')

        <div class="flex gap-2 items-center">
            <h3 class="grow">
                {{ __('campaigns/import.title') }}
            </h3>
            <a href="https://docs.kanka.io/en/latest/features/campaigns/import.html" target="_blank" class="btn2 btn-sm btn-ghost">
                <x-icon class="question"></x-icon>
                {{ __('crud.actions.help') }}
            </a>
        </div>

        <form id="campaign-import-form" method="post" action="{{ \App\Facades\Domain::importer() }}">
            {{ csrf_field() }}
            <x-grid type="1/1">
                <h4>{{ __('campaigns/import.uploader.well') }}</h4>

                <div class="field field-entities">
                    <label>Export files</label>
                    {!! Form::file('file', ['class' => 'w-full ', 'multiple', 'id' => 'export-files']) !!}
                </div>

                <button type="submit" class="btn2 btn-primary">
                    Upload campaign export
                </button>

                <input type="hidden" name="campaign" value="{{ $campaign->id }}" />
            </x-grid>
        </form>

        <div class="progress h-0.5 w-full bg-gray" style="display: none">
            <div class="text-center text-2xl py-4">
                <x-icon class="loading" />
            </div>
            <div class="h-0.5 bg-aqua" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                <span class="sr-only"></span>
            </div>
        </div>

        <div class="box box-solid">

        </div>
    </div>
@endsection

@section('modals')

@endsection

@section('scripts')
    @parent
    @vite('resources/js/campaigns/import.js')
@endsection
