<?php /**
 * @var \App\Models\Note $model
 * @var \App\Services\CampaignService $campaign
 */
?>
@if ($model->note)
    <div class="entity-header-sub pull-left">
        <span title="{{ \App\Facades\Module::singular(config('entities.ids.note'), __('entities.note')) }}" data-toggle="tooltip">
        <i class="fa-solid fa-book-open" aria-hidden="true"></i>
        {!! $model->note->tooltipedLink() !!}
        </span>
    </div>
@endif
