<div class="box box-solid entity-abilities-box">
    <div class="box-body">
        <h2 class="page-header with-border">
            {{ __('crud.tabs.abilities') }}
        </h2>

        <p class="help-block entity-abilities-helper">
            {{ __('entities/abilities.show.helper') }}
        </p>

    </div>
</div>

<div id="abilities">
    <abilities
            id="{{ $entity->id }}"
            api="{{ route('entities.entity_abilities.api', $entity) }}"
            permission="{{ Auth::check() && Auth::user()->can('update', $entity->child) }}"
    ></abilities>
</div>