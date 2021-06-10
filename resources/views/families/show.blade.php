<div class="row">
    <div class="col-md-2">
        @include('families._menu')
    </div>


    <div class="col-md-8">

        @include('entities.components.entry')
        @include('entities.components.notes')

        @include('families.panels._members')

        @include('cruds.boxes.history')
    </div>

    <div class="col-md-2">
        @include('entities.components.pins')
    </div>
</div>


@if (isset($exporting))
    @include('families.panels.families')
    @if ($campaign->enabled('characters'))
        @include('families.panels.members')
        @include('families.panels.all_members')
    @endif
@endif
