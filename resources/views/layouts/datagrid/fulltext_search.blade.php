{!! Form::open(['url' => $route, 'method' => 'GET', 'class' => 'flex-0 form-inline datagrid-search inline-block', 'role' => 'form']) !!}
<div class="field field-search">
    <input type="text" name="term" value="{{ $term ?? null }}" placeholder="{{ __('crud.search') }}" />
</div>
{!! Form::close() !!}
