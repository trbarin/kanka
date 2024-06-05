@php
$usages = [
    '' => __('campaigns.invites.usages.no_limit'),
    '1' => __('campaigns.invites.usages.once'),
    '5' => __('campaigns.invites.usages.five'),
    '10' => __('campaigns.invites.usages.ten'),
];
@endphp

{{ csrf_field() }}
<x-grid type="1/1">
    <x-forms.field
        field="usage"
        :required="true"
        :label="__('campaigns.invites.fields.usage')">
        <x-forms.select name="validity" :options="$usages" class="w-full"  />
    </x-forms.field>

    <x-forms.field
        field="role"
        :required="true"
        :label="__('campaigns.invites.fields.role')">
        <x-forms.select name="role_id" :options="$campaign->roles()->where(['is_public' => false, 'is_admin' => false])->pluck('name', 'id')" class="w-full select" />
    </x-forms.field>
</x-grid>
