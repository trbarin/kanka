@extends('layouts.app', [
    'title' => __('campaigns/export.title') . ' - ' . $campaign->name,
    'breadcrumbs' => [
        ['url' => route('overview', $campaign), 'label' => __('entities.campaign')],
        __('campaigns.show.tabs.export')
    ],
    'canonical' => true,
    'mainTitle' => false,
    'sidebar' => 'campaign',
])

@section('content')
    <div class="flex gap-5 flex-col max-w-7xl">
        @include('partials.ads.top')
        @include('partials.errors')

        <div class="flex gap-2 items-center">
            <h3 class="mt-0 grow">
                {{ __('campaigns/export.title') }}
            </h3>
            <a href="https://docs.kanka.io/en/latest/features/campaigns/export.html" target="_blank" class="btn2 btn-sm btn-ghost">
                <x-icon class="question"></x-icon>
                {{ __('crud.actions.help') }}
            </a>
        </div>

        @if ($campaign->exportable())
        <div class="text-center">
            <button class="btn2 btn-primary btn-large campaign-export-btn" data-url="{{ route('campaign.export-process', $campaign) }}">
                <i class="fa-solid fa-download" aria-hidden="true"></i>
                {{ __('campaigns/export.actions.export') }}
            </button>
        </div>
        @else
        <x-alert type="warning">
            {{ __('campaigns/export.errors.limit') }}
        </x-alert>
        @endif
    </div>
@endsection
