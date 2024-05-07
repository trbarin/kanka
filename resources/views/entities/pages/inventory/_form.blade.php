<?php /** @var \App\Models\Inventory $inventory */?>
{{ csrf_field() }}
@php
$preset = null;

if (isset($inventory) && $inventory->image_uuid) {
    $preset = $inventory->image;
}
@endphp
<x-grid>
    <input type="hidden" name="item_id" value="" />
    @include('cruds.fields.item', [
        'preset' => (!empty($inventory) && $inventory->item ? $inventory->item: false),
        'allowNew' => false,
        'dropdownParent' => request()->ajax() ? '#inventory-dialog' : null,
        'required' => true,
        'multiple' => isset($multiple),
    ])

    <x-forms.field
        field="name"
        :required="true"
        :label="__('entities/inventories.fields.name')">
        {!! Form::text(
            'name',
            null,
            [
                'placeholder' => __('entities/inventories.placeholders.name'),
                'class' => '',
                'max-length' => 45
            ]
        ) !!}
    </x-forms.field>

    <x-forms.field
        field="amount"
        :required="true"
        :label="__('entities/inventories.fields.amount')">
        {!! Form::number('amount', (empty($inventory) ? 1 : null), ['class' => '', 'max' => 1000000000, 'min' => 0, 'required']) !!}
    </x-forms.field>

    <x-forms.field
        field="position"
        :label="__('entities/inventories.fields.position')">
        {!! Form::text('position', null, [
            'placeholder' => __('entities/inventories.placeholders.position'),
            'class' => '',
            'maxlength' => 191,
            'list' => 'position-list',
            'autocomplete' => 'off'
        ]) !!}

        <datalist id="position-list">
            @foreach (\App\Models\Inventory::positionList($campaign)->pluck('position')->all() as $name)
                <option value="{{ e($name) }}">{{ e($name) }}</option>
            @endforeach
        </datalist>
    </x-forms.field>

    <x-forms.field field="description" css="col-span-2" :label="__('entities/inventories.fields.description')">
        {!! Form::text('description', null, ['placeholder' => __('entities/inventories.placeholders.description'), 'class' => '', 'maxlength' => 191]) !!}
    </x-forms.field>

    <x-forms.field field="copy" :label="__('entities/inventories.fields.copy_entity_entry_v2')">
        {!! Form::hidden('copy_item_entry', 0) !!}
        <x-checkbox :text="__('entities/inventories.helpers.copy_entity_entry_v2')">
            {!! Form::checkbox('copy_item_entry') !!}
        </x-checkbox>
    </x-forms.field>

    <x-forms.field field="equipped" :label="__('entities/inventories.fields.is_equipped')">
        {!! Form::hidden('is_equipped', 0) !!}
        <x-checkbox :text="__('entities/inventories.helpers.is_equipped')">
            {!! Form::checkbox('is_equipped', 1, isset($inventory) ? $inventory->is_equipped : null) !!}
        </x-checkbox>
    </x-forms.field>

    <div class="col-span-3">
        <x-forms.field
            field="image-uuid"
            :label="__('crud.fields.image')">

            <x-grid type="3/4">

                <div class="col-span-3">
                    <x-forms.foreign
                        field="image-uuid"
                        :campaign="$campaign"
                        name="image_uuid"
                        :allowClear="true"
                        :route="route('images.find', $campaign)"
                        :placeholder="__('fields.gallery.placeholder')"
                        :selected="$preset">
                    </x-forms.foreign>
                </div>
            @if (!isset($bulk) && !empty($inventory) && !empty($inventory->image_uuid) && !empty($inventory->image))
            <div class="preview w-32">
                    @include('cruds.fields._image_preview', [
                        'image' => $inventory->image->getUrl(192, 144),
                        'title' => $inventory->name,
                    ])
                </div>
            @endif
            </x-grid>
        </x-forms.field>
    </div>
    @include('cruds.fields.visibility_id', ['model' => $inventory ?? null])
</x-grid>



