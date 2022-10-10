<?php

return [
    'create'        => [
        'title' => 'Nieuwe gebeurtenis',
    ],
    'destroy'       => [],
    'edit'          => [],
    'events'        => [
        'title' => 'Gebeurtenis :name Gebeurtenissen',
    ],
    'fields'        => [
        'date'      => 'Datum',
        'event'     => 'Bovenliggende gebeurtenis',
        'events'    => 'Gebeurtenissen',
        'image'     => 'Afbeelding',
        'location'  => 'Locatie',
        'name'      => 'Naam',
        'type'      => 'Type',
    ],
    'helpers'       => [
        'date'  => 'Dit veld kan alles bevatten en is niet gekoppeld aan de kalenders van de campaign. Om deze gebeurtenis aan een kalender te koppelen, voeg je deze toe aan de kalender of op het tabblad herinneringen van deze gebeurtenissen.',
    ],
    'index'         => [
        'title' => 'Gebeurtenissen',
    ],
    'placeholders'  => [
        'date'      => 'Een datum voor je gebeurtenis',
        'location'  => 'Kies een locatie',
        'name'      => 'Naam van de gebeurtenis',
        'type'      => 'Ceremonie, Festival, Ramp, Veldslag, Geboorte',
    ],
    'show'          => [],
    'tabs'          => [
        'calendars' => 'Kalender Invoeren',
    ],
];