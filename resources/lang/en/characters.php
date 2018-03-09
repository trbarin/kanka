<?php

return [
    'create'        => [
        'description'   => '',
        'success'       => 'Character \':name\' created.',
        'title'         => 'Create a new character',
    ],
    'destroy'       => [
        'success'   => 'Character \':name\' removed.',
    ],
    'edit'          => [
        'description'   => '',
        'success'       => 'Character \':name\' updated.',
        'title'         => 'Edit Character :name',
    ],
    'fields'        => [
        'age'                       => 'Age',
        'eye'                       => 'Eye colour',
        'family'                    => 'Family',
        'fears'                     => 'Fears',
        'free'                      => 'Free text',
        'goals'                     => 'Goals',
        'hair'                      => 'Hair',
        'height'                    => 'Height',
        'history'                   => 'History',
        'image'                     => 'Image',
        'is_personality_visible'    => 'Is personality visible',
        'languages'                 => 'Languages',
        'location'                  => 'Location',
        'mannerisms'                => 'Mannerisms',
        'name'                      => 'Name',
        'physical'                  => 'Physical',
        'race'                      => 'Race',
        'relation'                  => 'Relation',
        'sex'                       => 'Sex',
        'skin'                      => 'Skin',
        'title'                     => 'Title',
        'traits'                    => 'Traits',
        'weight'                    => 'Weight',
    ],
    'hints'         => [
        'is_personality_visible'    => 'You can hide the whole personality section from non-Admin users.',
    ],
    'index'         => [
        'actions'       => [
            'random'    => 'New Random Character',
        ],
        'add'           => 'New Character',
        'description'   => 'Manage the characters of :name.',
        'header'        => 'Characters in :name',
        'title'         => 'Characters',
    ],
    'organisations' => [
        'actions'       => [
            'add'   => 'Add organisation',
        ],
        'create'        => [
            'description'   => 'Associate an organisation to a character',
            'success'       => 'Character added to organisation.',
            'title'         => 'New Organisation for :name',
        ],
        'destroy'       => [
            'success'   => 'Character organisation removed.',
        ],
        'edit'          => [
            'description'   => '',
            'success'       => 'Character organisation updated.',
            'title'         => 'Update Organisation for :name',
        ],
        'fields'        => [
            'organisation'  => 'Organisation',
            'role'          => 'Role',
        ],
        'placeholders'  => [
            'organisation'  => 'Choose an organisation...',
        ],
    ],
    'placeholders'  => [
        'age'       => 'Age',
        'eye'       => 'Eye colour',
        'family'    => 'Please select a character',
        'fears'     => 'Fears',
        'free'      => 'Free text',
        'goals'     => 'Goals',
        'hair'      => 'Hair',
        'height'    => 'Height',
        'history'   => 'History',
        'image'     => 'Image',
        'languages' => 'Languages',
        'location'  => 'Please select a location',
        'mannerisms'=> 'Mannerisms',
        'name'      => 'Name',
        'physical'  => 'Physical',
        'race'      => 'Race',
        'sex'       => 'Sex',
        'skin'      => 'Skin',
        'title'     => 'Title',
        'traits'    => 'Traits',
        'weight'    => 'Weight',
    ],
    'sections'      => [
        'appearance'    => 'Appearance',
        'general'       => 'General information',
        'history'       => 'History',
        'personality'   => 'Personality',
    ],
    'show'          => [
        'description'   => 'A detailed view of a character',
        'tabs'          => [
            'free'          => 'Free Text',
            'history'       => 'History',
            'organisations' => 'Organisations',
            'personality'   => 'Personality',
        ],
        'title'         => 'Character :name',
    ],
];
