<?php /** @var \App\User $user */ ?>
<x-dialog.header>
    {{ __('settings.subscription.change.title') }}
</x-dialog.header>

<article class="text-center max-w-xl container">

    <x-grid type="1/1">
    @if ($user->isFrauding())
        <x-alert type="warning">
            {{ __('emails/validation.modal') }}
        </x-alert></div><?php return; ?>
    @endif

    <h4>
        @if ($user->hasManualSubscription())
                    You currently have a manual subscription managed by our team. Please contact us at <a href="mailto:{{ config('app.email') }}">{{ config('app.email') }}</a> for assistance.
        @elseif ($user->hasPayPal())
            {!! __('settings.subscription.change.text.upgrade_paypal', [
                'upgrade' => "<strong>$currency" . number_format($upgrade, 2) . "</strong>",
                'tier' => "<strong>$tier->name</strong>",
                'amount' => "<strong>$currency$amount</strong>",
                'date' => $user->subscription('kanka')->ends_at->isoFormat('MMMM D, Y')
            ]) !!}
        @else
            {!! __('settings.subscription.change.text.upgrade_' . ($period->isYearly() ? 'yearly' : 'monthly'), [
                'upgrade' => "<strong>$currency<span id='pricing-now'>" . number_format($upgrade, 2) . "</span></strong>",
                'tier' => "<strong>$tier->name</strong>",
                'amount' => "<strong>$currency$amount</strong>"
            ]) !!}
        @endif
    </h4>

    @if ($user->hasManualSubscription())
        @php return @endphp
    @endif
    <x-alert type="error" :hidden="true"></x-alert>

    @includeWhen($hasPromo, 'settings.subscription._promo')
    <div class="card m-0">
        <ul class="nav-tabs bg-base-300 !p-1 rounded " role="tablist">
            @if (! $limited)
            <li role="presentation" class="active">
                <a href="#card" aria-controls="home" role="tab" data-toggle="tab">
                    <x-icon class="fa-regular fa-credit-card"></x-icon>
                    {{ __('billing/payment_methods.types.card') }}
                </a>
            </li>
            @endif
            <li role="presentation" @if ($limited) class="active" @endif>
                <a href="#paypal" aria-controls="settings" role="tab" data-toggle="tab">
                    <i class="fa-brands fa-paypal" aria-hidden="true"></i>
                    PayPal
                </a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content bg-base-100 p-4 rounded-bl rounded-br">
            @if (! $limited)
            <div role="tabpanel" class="tab-pane active" id="card">
                {!! Form::open(['route' => ['settings.subscription.subscribe', 'tier' => $tier], 'method' => 'POST', 'id' => 'subscription-confirm']) !!}

                <x-grid type="1/1" css="text-left">
                @if (!$card)
                    <x-forms.field field="card-name" :label="__('settings.subscription.payment_method.card_name')">
                        <input type="text" name="card-holder-name"  />
                    </x-forms.field>

                    <x-forms.field field="card-number" :label="__('settings.subscription.payment_method.card')">
                        <div id="card-element" class=""></div>
                    </x-forms.field>
                @else
                    <div class="text-center">
                        <strong>{{ __('settings.subscription.fields.payment_method') }}</strong><br />
                        <i class="fa-solid fa-credit-card"></i> **** {{ $card->card->last4 }} {{ $card->card->exp_month }}/{{ $card->card->exp_year }}
                        <p><a href="{{ route('billing.payment-method') }}">{{ __('settings.subscription.payment_method.actions.change') }}</a></p>
                    </div>
                    @if ($isDowngrading)

                        <p class="help-block">
                            {!! __('settings.subscription.upgrade_downgrade.downgrade.provide_reason')!!}
                        </p>

                        <div class="field-reason">
                            <label>{{ __('settings.subscription.fields.reason') }}</label>

                            @php $reasons = [
                                '' => __('crud.select'),
                                'financial' => __('settings.subscription.cancel.options.financial'),
                                'not_using' => __('settings.subscription.cancel.options.not_using'),
                                'missing_features' => __('settings.subscription.cancel.options.missing_features'),
                                'custom' => __('settings.subscription.cancel.options.custom')
                            ]; @endphp
                            <x-forms.select name="reason" :options="$reasons" class="w-full select-reveal-field" :extra="['data-change-target' => '#downgrade-reason-custom']" />

                            <textarea name="reason_custom" placeholder="{{ __('settings.subscription.placeholders.downgrade_reason') }}" class="w-full" rows="4" id="downgrade-reason-custom" style="display: none"></textarea>
                        </div>

                    @endif
                @endif
                <div class="text-center">
                    <button class="btn2 btn-lg btn-primary subscription-confirm-button" data-text="{{ __('settings.subscription.actions.subscribe') }}">
                        <span>{{ __('settings.subscription.actions.subscribe') }}</span>
                        <i class="fa-solid fa-spin fa-spinner spinner" style="display: none"></i>
                    </button>
                </div>
                </x-grid>

                <input type="hidden" name="coupon" id="coupon" value="" />
                <input type="hidden" name="period" value="{{ $period->isYearly() ? 'yearly' : 'monthly' }}" />
                <input type="hidden" name="payment_id" value="{{ $card ? $card->id : null }}" />
                <input type="hidden" name="subscription-intent-token" value="{{ $intent->client_secret }}" />
                {!! Form::close() !!}
            </div>
            @endif
            <div role="tabpanel" class="tab-pane {{ $limited ? 'active' : null }}" id="paypal">

                <x-grid type="1/1" css="text-left">
                <p class="help-block">
                    {{ __('settings.subscription.helpers.alternatives-2', ['method' => 'PayPal']) }}
                </p>
                @if (!$period->isYearly())
                    <x-alert type="warning">
                        {{ __('settings.subscription.helpers.alternatives_yearly', ['method' => 'PayPal']) }}
                    </x-alert>
                @else
                    @if ($user->subscribed('kanka') && !$user->hasPayPal())
                        <x-alert type="warning">
                            {{ __('settings.subscription.helpers.alternatives_warning') }}
                        </x-alert>
                    @else

                    @if ($hasPromo)
                        <x-alert type="warning alert-coupon">
                            Sadly we currently don't support promotions on PayPal subscriptions.
                        </x-alert>
                    @endif

                    {!! Form::open(['route' => ['paypal.process-transaction', 'tier' => $tier], 'method' => 'POST', 'class' => 'subscription-form flex flex-row gap-5']) !!}
                        <p class="help-block">
                            {{ __('settings.subscription.helpers.paypal_v3') }}
                        </p>
                        <div class="text-center">
                            <button class="btn2 btn-lg btn-primary subscription-confirm-button" data-text="{{ __('settings.subscription.actions.subscribe') }}">
                                <span>{{ __('settings.subscription.actions.subscribe') }}</span>
                                <i class="fa-solid fa-spin fa-spinner spinner" style="display: none"></i>
                            </button>
                        </div>
                        <input type="hidden" name="coupon" id="coupon" value="" />
                        <input type="hidden" name="period" value="{{ $period->isYearly() ? 'yearly' : 'monthly' }}" />
                        <input type="hidden" name="payment_id" value="{{ $card ? $card->id : null }}" />
                        <input type="hidden" name="subscription-intent-token" value="{{ $intent->client_secret }}" />
                    {!! Form::close() !!}
                    @endif
                @endif
                </x-grid>
            </div>
        </div>
    </div>

        <p class="help-block">
            {!! __('settings.subscription.helpers.stripe', ['stripe' => link_to('https://stripe.com', 'Stripe', ['target' => '_blank'])]) !!}
    @if($isYearly)
            <br />{!! __('settings.subscription.trial_period', ['email' => link_to('mailto:' .  config('app.email'), config('app.email'))]) !!}
    @endif
        </p>
    </div></x-grid>
</article>
