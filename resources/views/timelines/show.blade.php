<div class="row">
    <div class="col-md-2">
        @include('timelines._menu')
    </div>


    <div class="col-md-8">

        @include('entities.components.entry')
        @include('entities.components.notes')

        @include('timelines._timeline', ['timeline' => $model])

        @include('cruds.boxes.history')
    </div>

    <div class="col-md-2">
        @include('entities.components.pins')
    </div>
</div>
