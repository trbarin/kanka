<?php

return [
    'create'        => [
        'title' => 'Nová událost',
    ],
    'destroy'       => [],
    'edit'          => [],
    'events'        => [
        'title' => 'Události podřazené události ::name',
    ],
    'fields'        => [
        'date'      => 'Kalendářní datum',
        'event'     => 'Nadřazená událost',
        'events'    => 'Události',
        'image'     => 'Obrázek',
        'location'  => 'Místo',
        'name'      => 'Název',
        'type'      => 'Typ',
    ],
    'helpers'       => [
        'date'              => 'Toto pole může může obsahovat cokoli a není propojené s kalendářem tažení. Pokud chceš tuto událost připojit k některému kalendáři, přidej ji ke kalendáři nebo do karty připomínky této události.',
        'nested_without'    => 'Zobrazit všechny události, které nemají nadřazenou událost. Klepnutím na danou událost zobrazíš podřízené události.',
    ],
    'index'         => [
        'title' => 'Události',
    ],
    'placeholders'  => [
        'date'      => 'Kalendářní datum události',
        'location'  => 'Vyber si místo',
        'name'      => 'Název události',
        'type'      => 'Oslava, Festival, Pohroma, Bitva, Narozeniny',
    ],
    'show'          => [
        'tabs'  => [
            'events'    => 'Události',
        ],
    ],
    'tabs'          => [
        'calendars' => 'Položky kalendáře',
    ],
];