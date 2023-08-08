<a href="{{ route('entities.entity_abilities.reorder', $entity) }}" class="btn2 btn-sm">
    <x-icon class="fa-solid fa-sort"></x-icon>
    <span class="hidden-xs hidden-sm">{{ __('entities/abilities.show.reorder') }}</span>
    <span class="visible-xs visible-sm">{{ __('sidebar.campaign_switcher.reorder') }}</span>
</a>
<a href="{{ route('entities.entity_abilities.reset', $entity) }}" class="btn2 btn-sm">
    <x-icon class="fa-solid fa-redo"></x-icon>
    <span class="hidden-xs hidden-sm">{{ __('entities/abilities.actions.reset') }}</span>
    <span class="visible-xs visible-sm">{{ __('crud.actions.reset') }}</span>
</a>
@if ($entity->isCharacter())
    <a href="{{ route('entities.entity_abilities.import', [$entity, 'from' => 'race']) }}" class="btn2 btn-sm">
        <x-icon class="ra ra-wyvern"></x-icon>
        <span class="hidden-sm hidden-xs">{{ __('entities/abilities.actions.import_from_race') }}</span>
        <span class="visible-xs visible-sm">{{ __('entities/abilities.actions.import_from_race_mobile') }}</span>
    </a>
@endif
<a href="{{ route('entities.entity_abilities.create', $entity) }}" class="btn2 btn-sm btn-accent"
    data-toggle="ajax-modal" data-target="#entity-modal" data-url="{{ route('entities.entity_abilities.create', $entity) }}">
    <x-icon class="plus"></x-icon>
    <span class="hidden-sm hidden-xs">{{ __('entities/abilities.actions.add') }}</span>
    <span class="visible-xs visible-sm">{{ __('crud.add') }}</span>
</a>