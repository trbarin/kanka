<?php /** @var \App\User $user */?>
@extends('layouts.app', [
    'title' => __('settings.profile.title'),
    'breadcrumbs' => false,
    'sidebar' => 'settings',
    'centered' => true,
])

@section('content')
    <x-grid type="1/1">
        @include('partials.errors')
        <h1 class="">
            {{ __('settings.profile.title') }}
        </h1>

        {!! Form::model($user, ['method' => 'PATCH', 'enctype' => 'multipart/form-data', 'route' => ['settings.profile'], 'data-shortcut' => 1]) !!}
            <div class="flex flex-col md:flex-row gap-5">
                <div class="grow flex flex-col gap-5">
                    <x-forms.field field="name" :label="__('profiles.fields.name')" :required="true">
                        <input type="text" name="name" maxlength="191" placeholder="{{ __('profiles.placeholders.name') }}" class="rounded border p-2 w-full" value="{!! old('name', $user->name ?? null) !!}" />
                    </x-forms.field>

                    @php $helper =  __('profiles.helpers.profile-name', [
    'marketplace' => link_to(config('marketplace.url'), __('footer.marketplace'), ['target' => '_blank']),
    'profile' => link_to_route('users.profile', __('profiles.settings.helpers.profile'), $user, ['target' => '_blank'])]) @endphp
                    <x-forms.field field="marketplace-name" :label="__('profiles.fields.profile-name')" :helper="$helper">
                        <input type="text" name="settings[marketplace_name]" maxlength="32" placeholder="{{ __('profiles.fields.profile-name') }}" class="rounded border p-2 w-full" value="{!! old('settings[marketplace_name]', $user->settings['marketplace_name'] ?? null) !!}" />
                    </x-forms.field>

                    <x-forms.field field="bio" :label="__('profiles.fields.bio')" :helper="__('profiles.settings.helpers.bio', [
    'link' => link_to_route('users.profile', __('profiles.settings.helpers.profile'), $user, ['target' => '_blank'])
    ])">
                        <textarea name="profile[bio]" placeholder="{{ __('profiles.placeholders.bio') }}" class="w-full rounded border p-2" rows="5" maxlength="300">{!! old('profile[bio]', \Illuminate\Support\Arr::get($user->profile, 'bio')) !!}</textarea>
                    </x-forms.field>

                    <x-forms.field field="share-login" :label="__('profiles.fields.login_sharing')">
                        <input type="hidden" name="has_last_login_sharing" value="0" />
                        <x-checkbox :text="__('profiles.fields.last_login_share')">
                            <input type="checkbox" name="has_last_login_sharing" value="1" @if (old('has_last_login_sharing', auth()->user()->has_last_login_sharing ?? false)) checked="checked" @endif />
                        </x-checkbox>
                    </x-forms.field>

                    @if (auth()->user()->isSubscriber())
                        <x-forms.field field="hide-sub" :label="__('profiles.fields.subscription_hiding')">
                            <input type="hidden" name="settings[hide_subscription]" value="0" />
                            <x-checkbox :text="__('profiles.fields.hide_subscription', [
    'hall_of_fame' => link_to('https://kanka.io/hall-of-fame', __('front/hall-of-fame.title'), null, ['target' => '_blank'])
    ])">
                                <input type="checkbox" name="settings[hide_subscription]" value="1" @if (old('settings[hide_subscription]', auth()->user()->settings['hide_subscription'] ?? false)) checked="checked" @endif />
                            </x-checkbox>
                        </x-forms.field>
                    @endif
                </div>
                <x-forms.field field="avatar" :label="__('settings.profile.avatar')">
                    <input type="file" name="avatar" class="image w-full" id="header_image" accept=".jpg, .jpeg, .png, .gif, .webp, .gif" />

                    @if (!empty(auth()->user()->avatar) && auth()->user()->avatar != 'users/default.png')
                        <div class="rounded-full">
                            <img class="avatar rounded-full avatar-user" src="{{ auth()->user()->getAvatarUrl(200) }}" width="200" height="200" alt="{{ auth()->user()->name }}">
                        </div>

                    @endif

                </x-forms.field>
            </div>
            <div class="text-right">
                <x-buttons.confirm type="primary">
                    {{ __('settings.profile.actions.update_profile') }}
                </x-buttons.confirm>
            </div>
        {!! Form::close() !!}
        @if (!app()->isProduction())
            {!! Form::model($user, ['method' => 'PATCH', 'enctype' => 'multipart/form-data', 'route' => ['tutorials.reset']]) !!}
            <div class="flex gap-2 my-5">
                <h1 class="grow">
                    Reset Tutorials
                </h1>
                <x-buttons.confirm type="danger" outline="true">
                    Reset tutorials
                </x-buttons.confirm>
            </div>
            {!! Form::close() !!}
        @endif
    </x-grid>
@endsection
