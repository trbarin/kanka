<div class="row">
    <div class="col-md-2">
        @include('organisations._menu')
    </div>



    <div class="col-md-8">

        @include('entities.components.entry')
        @include('entities.components.notes')

        @include('organisations.panels._members')


        @include('cruds.boxes.history')
    </div>

    <div class="col-md-2">
        @include('entities.components.pins')
    </div>
</div>
