<?php
/**
 * View used in Quest and Journals form "calendar" button
 * @var \App\Models\Journal $model
 */
$calendars = \App\Models\Calendar::get();
$onlyOneCalendar = count($calendars) == 1;
$oldCalendarID = old('calendar_id');
// Make sure the user has access to the source's calendar
if (!empty($source) && $source->calendarReminder()) {
    $oldCalendarID = $source->calendarReminder()->calendar_id;
}
$calendar = null;
if (!empty($oldCalendarID)) {
    $calendar = \App\Models\Calendar::find($oldCalendarID);
}
?>
@if (isset($model) && $model->hasCalendarButNoAccess())
    <input type="hidden" name="calendar_id" value="{{ $model->calendarReminder()->calendar_id }}" />
    <input type="hidden" name="calendar_skip" value="1" />
    @php return; @endphp
@endif
<div class="field-calendar-date">
    <x-helper>{{ __('crud.hints.calendar_date') }}</x-helper>

    <a href="#" id="entity-calendar-form-add" class="btn2 btn-sm"
       style="<?=(!empty($model) && $model->hasCalendar() || !empty($oldCalendarID) ? "display: none" : null)?>" data-default-calendar="{{ ($onlyOneCalendar ? $calendars->first()->id : null) }}">
        <x-icon entity="calendar" />
        {{ __('crud.forms.actions.calendar') }}
    </a>

    <div class="entity-calendar-form" style="<?=((!isset($model) || !$model->hasCalendar()) && empty($oldCalendarID) ? "display: none" : null)?>">
        @if (count($calendars) == 1)
            <input type="hidden" name="calendar_id" value="{{ isset($model) && $model->hasCalendar() ? $model->calendarReminder()->calendar_id : FormCopy::field('calendar_id')->string() }}" />
        @else
            <input type="hidden" name="calendar_id" />
            <div class="grid gap-2 md:gap-4 md:grid-cols-3 mb-4">
                <div class="field-calendar entity-calendar-selector">
                    <x-forms.foreign
                        :campaign="$campaign"
                        name="calendar_id"
                        key="calendar"
                        entityType="calendars"
                        :allowClear="true"
                        :route="route('calendars.find', $campaign)"
                        :selected="isset($model) && $model->calendarReminder() && $model->calendarReminder()->calendar ? $model->calendarReminder()->calendar : FormCopy::field('calendar')->select()"
                        :dropdownParent="$dropdownParent ?? null"
                        :entityTypeID="config('entities.ids.calendar')">
                    </x-forms.foreign>
                </div>
            </div>
        @endif

        <div class="entity-calendar-subform" style="<?=((!isset($model) || !$model->hasCalendar()) && empty($oldCalendarID) ? "display: none" : null)?>">
            <div class="grid gap-2 md:gap-4 md:grid-cols-3">
                <x-forms.field
                    field="year"
                    :label="__('calendars.fields.year')">

                    <input type="number" name="calendar_year" class="w-full" value="{{ FormCopy::field('calendar_year')->string() ?: old('calendar_year', $model->calendar_year ?? null) }}" />
                </x-forms.field>

                <x-forms.field
                    field="month"
                    :label="__('calendars.fields.month')">
                    {!! Form::select(
                        'calendar_month',
                        (!empty($model) && $model->hasCalendar() ? $model->calendarReminder()->calendar->monthList(): (!empty($calendar) ? $calendar->monthList() : [])),
                        FormCopy::field('calendar_month')->string(),
                        ['class' => ''],
                        (!empty($model) && $model->hasCalendar() ? $model->calendarReminder()->calendar->monthDataProperties(): (!empty($calendar) ? $calendar->monthDataProperties() : []))
                    ) !!}
                </x-forms.field>

                <x-forms.field
                    field="day"
                    :label="__('calendars.fields.day')">
                    {!! Form::select(
                        'calendar_day',
                        (!empty($model) && $model->hasCalendar() ? $model->calendarReminder()->calendar->dayList($model->calendarReminder()->month) : (!empty($calendar) ? $calendar->dayList() : [])),
                        FormCopy::field('calendar_day')->string(),
                        ['class' => '']
                    ) !!}
                </x-forms.field>

                <x-forms.field
                    field="length"
                    :label="__('calendars.fields.length')">
                    <input type="number" name="calendar_length" class="w-full" value="{{ FormCopy::field('calendar_length')->string() ?: old('calendar_length', $model->calendar_length ?? null) }}" />
                </x-forms.field>

                <x-forms.field
                    field="colour"
                    :label="__('crud.fields.colour')">
                    <span>
                        <input type="text" name="calendar_colour" value="{{ old('calendar_colour', $source->calendar_colour ?? $model->calendar_colour ?? null) }}" maxlength="7" class="spectrum" />
                    </span>
                </x-forms.field>

                <x-forms.field
                    field="periodicity"
                    :label="__('calendars.fields.recurring_periodicity')">
                     {!! Form::select('calendar_recurring_periodicity', (!empty($model) && $model->hasCalendar() ? $model->calendarReminder()->calendar->recurringOptions(): (!empty($calendar) ? $calendar->recurringOptions() : [])), null, ['class' => 'reminder-periodicity']) !!}
                </x-forms.field>
            </div>
        </div>
        <div class="entity-calendar-loading text-center p-4" style="display: none">
            <x-icon class="load" />
        </div>


        <div class="text-right mt-2">
            <a href="#" id="entity-calendar-form-cancel" class="btn2 btn-ghost btn-sm" style="@if ((((isset($model) && $model->hasCalendar()) || empty($model))) && $onlyOneCalendar) @else display:none @endif">
                <x-icon class="fa-solid fa-eraser" />
                {{ __('crud.remove') }}
            </a>
        </div>
    </div>
</div>

<input type="hidden" name="calendar-data-url" data-url="{{ route('calendars.month-list', [$campaign, 'calendar' => 0]) }}">
