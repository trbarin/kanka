<x-forms.field field="colour" :required="{{ $required ?? false }}" :label="__('crud.fields.colour')">
    {!! Form::select('colour', FormCopy::colours(), FormCopy::field('colour')->string(), ['class' => 'w-full select2-colour', 'style' => 'width: 100%']) !!}
</x-forms.field>
