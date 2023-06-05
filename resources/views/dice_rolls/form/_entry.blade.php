
<x-grid>
    @include('cruds.fields.name', ['trans' => 'dice_rolls'])
    @include('cruds.fields.character')
    @include('cruds.fields.tags')

    <div class="form-group required parameters">
        <label>{{ __('dice_rolls.fields.parameters') }}</label>
        {!! Form::text('parameters', FormCopy::field('parameters')->string(), ['placeholder' => __('dice_rolls.placeholders.parameters'), 'class' => 'form-control', 'maxlength' => 191]) !!}
        <a href="//docs.kanka.io/en/latest/entities/dice-rolls.html#creating-a-dice-roll-template" target="_blank">{{ __('dice_rolls.hints.parameters') }}</a>
    </div>
    @include('cruds.fields.image')
</x-grid>
