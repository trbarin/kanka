@extends('layouts.app', [
    'title' => __('entities/move.title', ['name' => $post->name]),
    'breadcrumbs' => [
        ['url' => route($entity->pluralType() . '.index'), 'label' => __('entities.' . $entity->pluralType())],
        ['url' => route($entity->pluralType() . '.show', [$entity->entity_id]), 'label' => $entity->name],
        __('crud.actions.move'),
    ]
])

@section('content')
    @include('partials.errors')
    {!! Form::open(['route' => ['posts.move', $entity->id, $post->id], 'method' => 'POST']) !!}

    {{ csrf_field() }}
    <x-box>
        <div class="form-group">
            <label>{{ __('entities/notes.move.entity') }}</label>
            <select name="entity" class="form-control select2" data-tags="true" data-url="{{ route('search.entities-with-relations') }}" data-allow-clear="false" data-allow-new="false" data-placeholder="{{ __('entities/notes.move.description') }}"></select>
        </div>
        <div class="form-group form-check">
            <label>{!! Form::checkbox('copy', 1, true) !!}
                {{ __('entities/notes.move.copy') }}
            </label>
        </div>

        <x-box.footer>

            <button class="btn btn-success">@can('update', $entity->child) {{ __('entities/move.actions.move') }} @else  {{ __('entities/move.actions.copy') }} @endcan</button>
        </x-box.footer>
    </x-box>

    {!! Form::close() !!}
@endsection
