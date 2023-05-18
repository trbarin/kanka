<?php /**
 * @var \App\Models\CampaignBoost $boost
 * @var \App\Models\Campaign $campaign
 */
?>
@extends('layouts.app', [
    'title' => __('billing/payment_methods.title'),
    'breadcrumbs' => false,
    'sidebar' => 'settings',
])
@section('content')
    @include('partials.errors')

    <h1 class="mb-3">
        {{ __('billing/payment_methods.title') }}
    </h1>
    <p class="text-lg">
        {!! __('settings.subscription.billing.helper', [
            'stripe' => link_to('https://www.stripe.com', 'Stripe', ['target' => '_blank'])
        ]) !!}
    </p>
    <x-box>
        <strong>
            {{ __('settings.subscription.billing.saved' )}}
        </strong>
        <div id="billing">
            <billing-management
                    api_token="{{ $stripeApiToken }}"
                    trans="{{ $translations }}"
            ></billing-management>
        </div>
    </x-box>


    {!! Form::model(auth()->user(), ['method' => 'PATCH', 'route' => ['billing.payment-method.save']]) !!}
    <x-box>
        @if (auth()->user()->subscribed('kanka') || auth()->user()->subscription('kanka')?->ended())
            @include('settings.subscription.currency._blocked')
        @else
            <div class="form-group">
                <label>{{ __('settings.subscription.fields.currency') }}</label>
                {!! Form::select('currency', ['' => __('settings.subscription.currencies.usd'), 'eur' => __('settings.subscription.currencies.eur')], auth()->user()->currency(), ['class' => 'form-control']) !!}
            </div>
            <div class="text-right">
                <x-buttons.confirm type="primary" outline="true">
                    <x-icon class="save"></x-icon>
                    <span>
                {{ __('settings.subscription.actions.update_currency') }}</span>
                </x-buttons.confirm>
            </div>
        @endif
    </x-box>
    {!! Form::close() !!}


    {!! Form::model(auth()->user(), ['method' => 'PATCH', 'route' => ['settings.billing-info']]) !!}
    <x-box>
        <div class="form-group">
            <label class="inline-block w-full font-bold mb-1">
                {{ __('settings.billing.title') }}
            </label>
            {!! Form::textarea('profile[billing]', null, ['placeholder' => __('settings.billing.placeholder'), 'class' => 'rounded border p-2 w-full', 'rows' => 5, 'maxlength' => 1024]) !!}
        </div>

        <div class="text-right">
            <x-buttons.confirm type="primary" outline="true">
                <x-icon class="save"></x-icon>
                <span>
            {{ __('settings.billing.save') }}</span>
            </x-buttons.confirm>
        </div>
    </x-box>
    {!! Form::close() !!}
@endsection


@section('scripts')
    @parent
    @vite('resources/js/billing.js')
@endsection
