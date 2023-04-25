<div class="tab-pane" id="form-dashboard">
    <p class="help-block">{{ __('campaigns.helpers.dashboard') }}</p>

    <div class="form-group">
        <label>
            {{ __('campaigns.fields.excerpt') }}
            <i class="fa-solid fa-question-circle hidden-xs hidden-sm" title="{{ __('campaigns.helpers.excerpt') }}" data-toggle="tooltip" data-placement="bottom"></i>
        </label>
        {!! Form::textarea('excerptForEdition', null, ['class' => 'form-control html-editor', 'id' => 'excerpt', 'name' => 'excerpt']) !!}
        <p class="help-block visible-xs visible-sm">{{ __('campaigns.helpers.excerpt') }}</p>
    </div>

    <div class="form-group">
        <label for="header_image">
            {{ __('campaigns.fields.header_image') }}
            <i class="fa-solid fa-question-circle hidden-xs hidden-sm" title="{{ __('campaigns.helpers.header_image') }}" data-toggle="tooltip"></i>
        </label>
        <p class="help-block visible-xs visible-sm">{{ __('campaigns.helpers.header_image') }}</p>
        {!! Form::hidden('remove-header_image') !!}
        <div class="row">
            <div class="col-md-10">
                <div class="form-group">
                    {!! Form::file('header_image', ['class' => 'image form-control', 'id' => 'header_image']) !!}
                </div>
                <div class="form-group">
                    {!! Form::text('header_image_url', null, ['placeholder' => __('crud.placeholders.image_url'), 'class' => 'form-control']) !!}
                </div>

                <p class="help-block">
                    {{ __('crud.hints.image_limitations', ['formats' => 'PNG, JPG, GIF, WebP', 'size' => auth()->user()->maxUploadSize(true)]) }}
                    {{ __('crud.hints.image_recommendation', ['width' => '1200', 'height' => '400']) }}
                    @include('cruds.fields.helpers.share', ['max' => 25])
                </p>
            </div>
            <div class="col-md-2">
                @if (!empty($model->header_image))
                    @include('cruds.fields._image_preview', [
                        'image' => $model->thumbnail(200, 160, 'header_image'),
                        'title' => $model->name,
                        'target' => 'remove-header_image'
                    ])
                @endif
            </div>
        </div>
    </div>
</div>

@if(!$ajax)
@include('editors.editor')
@endif
