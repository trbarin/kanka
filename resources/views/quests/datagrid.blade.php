<?php /** @var \App\Models\Quest $model */ ?>

{!! $datagrid
    ->columns([
        // Avatar
        [
            'type' => 'avatar'
        ],
        // Name
        'name',
        'type',
        [
            'type' => 'parent',
        ],
        [
            'field' => 'instigator.name',
            'label' => __('quests.fields.instigator'),
            'render' => function($model) {
                return $model->instigator?->tooltipedLink();
            },
        ],
        [
            'label' => __('quests.show.tabs.elements'),
            'render' => function($model) {
                return $model->elements()->has('entity')->count();
            },
            'disableSort' => true,
        ],
        [
            'label' => '<i class="fa-solid fa-check-circle" title="' . __('quests.fields.is_completed') . '"></i>',
            'render' => function ($model) {
                return $model->is_completed ? '<i class="fa-solid fa-check-circle" title="' . __('quests.fields.is_completed') . '"></i>' : null;
            },
            'field' => 'is_completed',
        ],
        [
            'type' => 'calendar_date',
        ],
        [
            'type' => 'is_private',
        ]
    ])
    ->options(    [
        'route' => 'quests.index',
        'baseRoute' => 'quests',
        'trans' => 'quests.fields.',
    ]
) !!}
