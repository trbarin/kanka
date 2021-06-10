<div class="row">
    <div class="col-md-2">
        @include('races._menu')
    </div>



    <div class="col-md-8">

        @include('entities.components.entry')
        @include('entities.components.notes')

        @include('races.panels.characters')

        @include('cruds.partials.mentions')
        @include('cruds.boxes.history')
    </div>

    <div class="col-md-2">
        @include('entities.components.pins')
    </div>
</div>

@if (isset($exporting))
    @include('races.panels.races')
@endif
