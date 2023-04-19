<?php
/**
 * @var \App\Services\CampaignService $campaign
 * @var \App\Models\MiscModel $model
 * @var \App\Models\Entity $entity
 * @var \App\Models\Tag $tag
 */

if (!isset($entity)) {
    $entity = $model->entity;
}

$imageUrl = $imagePath = $headerImageUrl = null;
if ($model->image) {
    $imageUrl = $model->getOriginalImageUrl();
    $imagePath = $model->thumbnail(170);
} elseif ($campaignService->campaign()->superboosted() && !empty($entity) && $entity->image) {
    $imageUrl = $entity->image->getUrl();
    $imagePath = Img::crop(170, 170)->url($entity->image->path);
}
/** @var \App\Models\Tag[] $entityTags */
$entityTags = $entity->tagsWithEntity();

$buttonsClass = 1;
if ($model instanceof \App\Models\Character && $model->is_dead) {
    $buttonsClass++;
}
if ($model instanceof \App\Models\Quest && $model->is_completed) {
    $buttonsClass++;
}
if (auth()->check() && auth()->user()->isAdmin()) {
    $buttonsClass ++;
}

$superboosted = $campaignService->campaign()->superboosted();

$hasBanner = false;
if($campaignService->campaign()->boosted() && $entity->hasHeaderImage($superboosted)) {
    $hasBanner = true;
    $headerImageUrl = $entity->getHeaderUrl($superboosted);
}

?>

<div class="entity-header pb-5 flex flex-wrap @if ($hasBanner) with-entity-banner m-0 @endif">
    @if ($hasBanner)
        <div class="entity-banner cover-image" style="background-image: url('{{ $headerImageUrl }}');">
        </div>
    @endif

    @if ($imageUrl)
    <div class="entity-header-image relative">

        @can('update', $model)
            @if(isset($printing) && $printing)
                <img src="{{ $imagePath }}" class="entity-print-image" alt="{{ $model->name }}"/>
            @endif

            @if (!isset($printing))
            <a class="entity-image cover-background visible-xs" href="{{ $imageUrl }}" target="_blank" style="background-image: url('{{ $imagePath }}');"></a>
            @endif
            <div class="entity-image cover-background dropdown-toggle hidden-xs" data-toggle="dropdown" aria-expanded="false" style="background-image: url('{{ $imagePath }}');"></div>


            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                <li>
                    <a href="{{ $imageUrl }}" target="_blank">
                        <i class="fa-solid fa-external-link"></i> {{ __('entities/image.actions.view') }}
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="{{ route('entities.image.replace', $model->entity) }}" data-toggle="ajax-modal" data-target="#entity-modal" data-url="{{ route('entities.image.replace', $model->entity) }}">
                        {{ __('entities/image.actions.replace_image') }}
                    </a>
                </li>
                <li>
                    @if ($campaignService->campaign()->boosted())
                    <a href="{{ route('entities.image.focus', $model->entity) }}">
                        {{ __('entities/image.actions.change_focus') }}
                    </a>
                    @else
                    <a href="#" data-toggle="dialog" data-target="booster-cta">
                        {{ __('entities/image.actions.change_focus') }}
                    </a>
                    @endif
                </li>
            </ul>
        @else

            @if(isset($printing) && $printing)
                <img src="{{ $imagePath }}" class="entity-print-image" alt="{{ $model->name }}"/>
            @else
            <a class="entity-image cover-background" href="{{ $imageUrl }}" target="_blank" style="background-image: url('{{ $imagePath }}');"></a>
            @endif
        @endcan
    </div>
    @endif
    <div class="entity-header-text flex flex-col">
        <div class="entity-texts">
            @if (!empty($breadcrumb))
                <ol class="entity-breadcrumb text-xs mb-2 p-0">
                    @foreach ($breadcrumb as $bcdata)
                        <li class="inline-block">
                        @if (is_array($bcdata))
                        <a href="{{ $bcdata['url'] }}" class="no-underline" title="{{ $bcdata['label'] }}">
                            {{ $bcdata['label'] }}
                        </a>
                        @elseif(!empty($bcdata))
                            {{ $bcdata }}
                        @endif
                        </li>
                    @endforeach
                </ol>
            @endif
            <div class="entity-name-header flex gap-3 items-center">
                <h1 class="entity-name text-4xl m-0 break-all">
                    {!! $model->name !!}
                </h1>
                @if ($model instanceof \App\Models\Character && $model->is_dead)
                    <span class="entity-name-icon entity-char-dead cursor-pointer" data-toggle="tooltip" title="{{ __('characters.hints.is_dead') }}">
                        <i class="ra ra-skull entity-icons text-xl" aria-hidden="true" ></i>
                        <span class="sr-only">{{ __('characters.hints.is_dead') }}</span>
                    </span>
                @endif
                @if ($model instanceof \App\Models\Quest && $model->is_completed)
                    <span class="entity-name-icon entity-quest-complete cursor-pointer" data-toggle="tooltip" title="{{ __('quests.fields.is_completed') }}">
                        <i class="fa-solid fa-check-circle entity-icons text-xl" aria-hidden="true" ></i>
                        <span class="sr-only">{{ __('quests.fields.is_completed') }}</span>
                    </span>
                @endif
                @if ($model instanceof \App\Models\Organisation && $model->is_defunct)
                    <span class="entity-name-icon entity-org-defunct cursor-pointer" data-toggle="tooltip" title="{{ __('organisations.hints.is_defunct') }}">
                        <i class="fa-solid fa-shop-slash entity-icons text-xl" aria-hidden="true" ></i>
                        <span class="sr-only">{{ __('organisations.hints.is_defunct') }}</span>
                    </span>
                @endif

                @if (auth()->check() && auth()->user()->isAdmin())
                    <span role="button" tabindex="0" class="entity-privacy-icon" data-toggle="dialog-ajax" data-url="{{ route('entities.quick-privacy', $model->entity) }}" data-target="quick-privacy" aria-haspopup="dialog">
                            <i class="fa-solid fa-lock entity-icons text-xl" title="{{ __('entities/permissions.quick.title') }}" data-toggle="tooltip" aria-hidden="true"></i>
                            <i class="fa-solid fa-lock-open entity-icons text-xl" title="{{ __('entities/permissions.quick.title') }}" data-toggle="tooltip" aria-hidden="true"></i>
                            <span class="sr-only">{{ __('entities/permissions.quick.screen-reader') }}</span>
                        </span>
                @endif
                <div class="btn-group entity-actions">
                    <span role="button" tabindex="0" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" aria-haspopup="menu" aria-controls="entity-submenu">
                        <i class="fa-solid fa-cog entity-icons cursor-pointer text-xl" aria-hidden="true"></i>
                        <span class="sr-only">{{ __('entities/permissions.quick.screen-reader') }}</span>
                    </span>
                    <ul class="dropdown-menu dropdown-menu-right" role="menu" id="entity-submenu">
                        @can('update', $model)
                            <li>
                                <a href="{{ route($entity->pluralType() . '.edit', $model->id) }}" data-keyboard="edit">
                                    <i class="fa-solid fa-pencil" aria-hidden="true"></i> {{ __('crud.edit') }}

                                    <span class="keyboard-shortcut pull-right" data-toggle="tooltip" title="{!! __('crud.keyboard-shortcut', ['code' => '<code>E</code>']) !!}" data-html="true">E</span>
                                </a>
                            </li>
                        @endcan
                        @can('create', $model)
                            <li>
                                <a href="{{ route($entity->pluralType() . '.create') }}">
                                    <i class="fa-solid fa-plus" aria-hidden="true"></i> {{ __('crud.actions.new') }}
                                </a>
                            </li>
                            @if (\Illuminate\Support\Facades\Route::has($entity->pluralType() . '.tree'))
                                <li>
                                    <a href="{{ route($entity->pluralType() . '.create', ['parent_id' => $model->id]) }}">
                                        <i class="fa-solid fa-plus" aria-hidden="true"></i> {{ __('crud.actions.new_child') }}
                                    </a>
                                </li>
                            @endif
                            <li>
                                <a href="{{ route($entity->pluralType() . '.create', ['copy' => $model->id]) }}">
                                    <i class="fa-solid fa-copy" aria-hidden="true"></i> {{ __('crud.actions.copy') }}
                                </a>
                            </li>
                        @endcan

                        @if ($model->entity)
                            @if(auth()->check())
                                @can('update', $model)
                                    <li>
                                        <a href="{{ route('entities.story.reorder', $model->entity->id) }}">
                                            <i class="fa-solid fa-list-ol"></i> {{ __('entities/story.reorder.icon_tooltip') }}
                                        </a>
                                    </li>
                                @endcan
                                <li>
                                    <a href="#" title="[{{ $model->getEntityType() }}:{{ $model->entity->id }}]" data-toggle="tooltip"
                                       data-clipboard="[{{ $model->getEntityType() }}:{{ $model->entity->id }}]" data-toast="{{ __('crud.alerts.copy_mention') }}">
                                        <i class="fa-solid fa-link"></i> {{ __('crud.actions.copy_mention') }}
                                    </a>
                                </li>
                                @if (auth()->user()->isAdmin())
                                    <li>
                                        <a href="{{ route('entities.template', $entity) }}">
                                            @if($entity->is_template)
                                                <i class="fa-regular fa-star" aria-hidden="true"></i> {{ __('entities/actions.templates.unset') }}
                                            @else
                                                <i class="fa-solid fa-star" aria-hidden="true"></i> {{ __('entities/actions.templates.set') }}
                                            @endif
                                        </a>
                                    </li>
                                @endif
                                <li class="divider"></li>
                            @endif
                            <li>
                                <a href="{{ route('entities.html-export', $entity) }}">
                                    <i class="fa-solid fa-print" aria-hidden="true"></i> {{ __('crud.actions.print') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('entities.json-export', $entity) }}">
                                    <i class="fa-solid fa-download" aria-hidden="true"></i> {{ __('crud.actions.json-export') }}
                                </a>
                            </li>
                        @endif
                        @if ((empty($disableCopyCampaign) || !$disableCopyCampaign) && auth()->check() && auth()->user()->hasOtherCampaigns($model->campaign_id))
                            <li class="divider"></li>
                            <li>
                                <a href="{{ route('entities.move', $entity->id) }}">
                                    <i class="fa-solid fa-clone" aria-hidden="true"></i> {{ __('crud.actions.move') }}
                                </a>
                            </li>
                        @endif

                        @if ((empty($disableMove) || !$disableMove) && auth()->check() && auth()->user()->can('move', $model))
                            <li>
                                <a href="{{ route('entities.transform', $entity->id) }}">
                                    <i class="fa-solid fa-exchange-alt" aria-hidden="true"></i> {{ __('crud.actions.transform') }}
                                </a>
                            </li>
                        @endif

                        @can('delete', $model)
                            <li class="divider"></li>
                            <li>
                                <a href="#" class="delete-confirm text-red" data-name="{{ $model->name }}" data-toggle="modal" data-target="#delete-confirm" data-recoverable="1">
                                    <i class="fa-solid fa-trash" aria-hidden="true"></i> {{ __('crud.remove') }}
                                </a>
                                {!! Form::open(['method' => 'DELETE','route' => [$entity->pluralType() . '.destroy', $model->id], 'style'=>'display:inline', 'id' => 'delete-confirm-form']) !!}
                                {!! Form::close() !!}
                            </li>
                        @endcan
                    </ul>
                </div>
            </div>
        </div>

        <div>
        @if ($model instanceof \App\Models\Character && !empty($model->title))
            <div class="entity-title entity-header-line">
                {{ $model->title }}
            </div>
        @endif

        @if (!empty($model->type))
            <div class="entity-type entity-header-line">
                {{ $model->type }}
            </div>
        @endif

        @if($entityTags->count() > 0)
        <div class="entity-tags entity-header-line text-xs flex  flex-wrap gap-2 mb-1 mt-2">
            @foreach ($entityTags as $tag)
                @if (!$tag->entity) @continue @endif
                <a href="{{ route('tags.show', $tag) }}" data-toggle="tooltip-ajax"
                   data-id="{{ $tag->entity->id }}" data-url="{{ route('entities.tooltip', $tag->entity->id) }}"
                   data-tag-slug="{{ $tag->slug }}"
                >
                    {!! $tag->html() !!}
                </a>
            @endforeach
        </div>
        @endif

        @includeIf('entities.headers._' . $model->getEntityType())

        @yield($entityHeaderActions ?? 'entity-header-actions')
        </div>
    </div>
</div>

@section('modals')
    @parent


    @if (!$campaignService->campaign()->boosted())
        <x-dialog id="booster-cta" :title="__('callouts.booster.titles.boosted')">
            <p class="mb-2">{{ __('entities/image.call-to-action') }}</p>
            @subscriber()
            <a href="{{ route('settings.premium', ['campaign' => $campaignService->campaign()]) }}" class="btn bg-boost text-white btn-block mb-2">
                {!! __('callouts.premium.unlock', ['campaign' => $campaignService->campaign()->name]) !!}
            </a>
            @else
                <p class="mb-2">{{ __('callouts.booster.limitation') }}</p>
                <a href="{{ route('front.premium') }}" class="btn bg-boost text-white btn-block mb-2">
                    {!! __('callouts.premium.learn-more') !!}
                </a>
            @endif
        </x-dialog>
    @endif

    <x-dialog id="quick-privacy" :title="__('Loading')">
        <div class="p-5 text-center">
            <i class="fa-solid fa-spinner fa-spin fa-2x" aria-hidden="true"></i>
        </div>
    </x-dialog>
@endsection


@section('styles')
    @parent
    <style>
        /** Entity Images URL**/
        :root {
            @if ($imageUrl) --entity-image-url: url('{{ $imageUrl }}'); @endif
            @if ($headerImageUrl) --entity-header-image-url: url('{{ $headerImageUrl }}'); @endif
        }
    </style>
@endsection
