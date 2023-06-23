<a role="button" tabindex="0" class="btn2 btn-error btn-outline transform duration-200 @if ($size === 'sm') btn-sm @endif"
   data-toggle="confirm-delete"
   data-confirm="{{ __('crud.delete_modal.confirm') }}"
   data-target="{{ $target }}"
>
    <x-icon class="trash"></x-icon>
    <span class="hidden md:!block">{{ $text ?? __('crud.remove') }}</span>
</a>