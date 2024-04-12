<?php

return [
    'title'     => 'Webhooks',
    'destroy'    => [
        'success'   => 'Webhook deleted successfully',
    ],
    'pitch'     => 'Create custom webhooks to receive custom updates whenever an entity from the campaign is updated.',
    'actions'   => [
        'add'       =>  'Create webhook',
        'update'    =>  'Update webhook',
        'test'      =>  'Test webhook',
        'action'    =>  'Change status',
        'bulks'     =>  [
            'enable'            => 'Enable',
            'enable_success'    => '{1} Enabled :count webhook.|[2,*] Enabled :count webhooks.',
            'disable'           => 'Disable',
            'disable_success'   => '{1} Disabled :count webhook.|[2,*] Disabled :count webhooks.',
            'delete_success'    => '{1} Deleted :count webhook.|[2,*] Deleted :count webhooks.',
        ],
    ],
    'create'    => [
        'title' => 'Add new webhook',
        'success'   => 'Webhook created successfully',
    ],
    'edit'      => [
        'title' => 'Update webhook',
        'success'   => 'Webhook updated successfully',
    ],
    'test'      => [
        'success' => 'Test request sent',
    ],
    'fields'    => [
        'event'     => 'Event',
        'type'      => 'Type',
        'message'   => 'Message',
        'url'       => 'Url',
        'enabled'    => 'Enabled',
        'events'    => [
            'new'       => 'New entity',
            'edited'    => 'Edited entity',
            'deleted'   => 'Deleted entity',
        ],
        'types'     => [
            'payload'   => 'Payload',
            'custom'   => 'Message',
        ],
    ],
    'helper'    => [
        'active'    => 'If the webhook is currently active',
        'status'    => 'Toggle the active status of the webhook',
        'message'   => 'Add a custom message with support for mappings',
    ],
    'placeholders'  => [
        'url'       => 'Target webhook\'s url',
        'message'   => '{who} made changes to {name}, check it out at {url}',
    ],
];
