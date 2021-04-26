<?php /** @var \App\Models\Calendar $model */ ?>
@inject('dateRenderer', 'App\Renderers\DateRenderer')

<div class="box box-solid">
    <div class="box-body box-profile">
        @if (!View::hasSection('entity-header'))
        @include ('cruds._image')
        @include('entities.components.links')
        @endif

        <ul class="list-group list-group-unbordered">
            @if ($model->type)
                <li class="list-group-item">
                    <b>{{ trans('calendars.fields.type') }}</b> <span class="pull-right">{{ $model->type }}</span>
                    <br class="clear" />
                </li>
            @endif
            @if ($model->suffix)
                <li class="list-group-item">
                    <b>{{ trans('calendars.fields.suffix') }}</b> <span class="pull-right">{{ $model->suffix }}</span>
                    <br class="clear" />
                </li>
            @endif
            @if ($model->date)
                <li class="list-group-item">
                    <b>{{ trans('calendars.fields.date') }}</b> <span class="pull-right">{{ $model->niceDate() }}</span>
                    <br class="clear" />
                </li>
            @endif
            @if ($model->calendar)
                <li class="list-group-item">
                    <b>{{ trans('calendars.fields.calendar') }}</b> <span class="pull-right">{!! $model->calendar->tooltipedLink() !!}</span>
                    <br class="clear" />
                </li>
            @endif
            @include('entities.components.relations')
            @include('entities.components.attributes')
            @include('entities.components.tags')
        </ul>
    </div>
</div>

@includeWhen(!isset($exporting), 'entities.components.menu')
@includeWhen(auth()->check() && !isset($exporting), 'entities.components.actions')
