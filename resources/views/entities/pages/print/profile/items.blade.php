<?php /** @var \App\Models\Item $model */?>
@if ($model->price)
{{ __('items.fields.price') }} | {{ $model->price }} |
@endif
@if ($model->size)
| {{ __('items.fields.size') }} | {{ $model->size }} |
@endif
@include('entities.components.profile._location')
@if ($model->character)
| {{ __('items.fields.character') }} | {!! $model->character->tooltipedLink() !!} |
@endif
@include('entities.pages.print.profile._type')
