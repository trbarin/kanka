@if (false && auth()->check() && !auth()->user()->settings()->get('banner_4yearpromo') && \Carbon\Carbon::create(2021, 11, 1)->isFuture())
    <div class="bg-primary banner-notification">
        <span>
            <a href="{{ route('settings.subscription') }}">
                {!! __('banners.kanka4years', ['code' => '<code>KANKA4YEAR</code>']) !!}
            </a>

            <button type="button" class="close" data-dismiss="alert" aria-hidden="true" id="banner-notification-dismiss" data-url="{{ route('settings.banner', ['code' => '4yearpromo']) }}">×</button>
        </span>
    </div>
@endif

@if (auth()->guest() || !auth()->user()->settings()->get('banner_das_migration'))
<div class="bg-orange banner-notification">
    <span>
        @if (auth()->check())
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true" id="banner-notification-dismiss" data-url="{{ route('settings.banner', ['code' => 'das_migration']) }}">×</button>
        @endif

        Kanka will be undergoing scheduled maintenance on Wednesday 19th of October 2022. This will result in Kanka being unavailable from <a href="https://everytimezone.com/s/fce7c091" target="_blank" style="text-decoration: underline"><i class="fa-solid fa-external-link"></i> 14:00 UTC</a> to 16:00 UTC. <br />Join us on <a href="{{ config('social.discord') }}" target="_blank"  style="text-decoration: underline">Discord</a> to get updates.

    </span>
</div>
@endif
