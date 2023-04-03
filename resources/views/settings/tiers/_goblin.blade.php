<div class="rounded p-4 bg-box mb-5">
    <div class="widget-user-header bg-teal-active">
        <h3 class="widget-user-username">Goblin</h3>
        <h5 class="widget-user-desc">{{ auth()->user()->currencySymbol() }}3 / {{ __('front.pricing.tier.month') }}</h5>
    </div>
    <div class="widget-user-image">
    </div>
    <div class="box-body">


    </div>
</div>

<div class="rounded p-4 bg-box mb-5">
    <div class="flex gap-2 items-center mb-5">
        <div class="flex-0">
            <img class="img-circle w-24 h-24" src="https://kanka-app-assets.s3.amazonaws.com/images/tiers/goblin-325.png" alt="Goblin">
        </div>
        <div class="grow">
            <h3>Goblin</h3>
            <h5>{{ auth()->user()->currencySymbol() }}3 / {{ __('front.pricing.tier.month') }}</h5>
        </div>
    </div>
    <div class="grid grid-cols-2 gap-3 w-fit">

        <div class="">{{ __('front.features.patreon.upload_limit') }}</div>
        <div class="">8 mb</div>

        <div class="">{{ __('front.features.patreon.upload_limit_map') }}</div>
        <div class="">10 mb</div>

        <div class="">{!! __('front.features.patreon.discord', ['discord' => link_to(config('social.discord'), 'Discord', ['target' => '_blank'])]) !!}</div>
        <div class=""><i class="fa-solid fa-check-circle"></i></div>

        <div class="">{{ __('front.features.patreon.default_image') }}</div>
        <div class=""><i class="fa-solid fa-check-circle"></i></div>

        <div class="">{!! __('front.features.patreon.hall_of_fame', ['link' => link_to_route('front.hall-of-fame', __('front/hall-of-fame.title'))]) !!}</div>
        <div class=""><i class="fa-solid fa-check-circle"></i></div>

        <div class="">{{ __('front.features.patreon.api_calls') }}</div>
        <div class=""><i class="fa-solid fa-check-circle"></i></div>

        <div class="">{{ __('front.features.patreon.pagination') }}</div>
        <div class=""><i class="fa-solid fa-check-circle"></i></div>

        <div class="">{{ __('front.features.patreon.monthly_vote') }}</div>
        <div class=""><i class="fa-solid fa-check-circle"></i></div>

        <div class="">{{ __('front.features.patreon.boosts') }}</div>
        <div class="">1</div>
    </div>

</div>