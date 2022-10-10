<?php

return [
    'create'        => [
        'title' => 'Nieuwe Quest',
    ],
    'destroy'       => [],
    'edit'          => [],
    'fields'        => [
        'character'     => 'Aanstichter',
        'copy_elements' => 'Kopieer elementen die aan de quest zijn gekoppeld',
        'date'          => 'Datum',
        'description'   => 'Beschrijving',
        'image'         => 'Afbeelding',
        'is_completed'  => 'Voltooid',
        'name'          => 'Naam',
        'quest'         => 'Bovenliggende Quest',
        'quests'        => 'Sub Quest',
        'role'          => 'Rol',
        'type'          => 'Type',
    ],
    'helpers'       => [],
    'hints'         => [
        'quests'    => 'Met het veld Bovenliggende Quest kan een web van in elkaar grijpende quests worden gebouwd.',
    ],
    'index'         => [
        'title' => 'Quests',
    ],
    'placeholders'  => [
        'date'  => 'Echte werelddatum voor de quest',
        'name'  => 'Naam van de quest',
        'quest' => 'Bovenliggende Quest',
        'role'  => 'De rol van deze entiteit in de quest',
        'type'  => 'Karakter Boog, Sidequest, Hoofd',
    ],
    'show'          => [],
];