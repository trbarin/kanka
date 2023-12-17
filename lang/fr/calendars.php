<?php

return [
    'actions'       => [
        'add_epoch'         => 'Ajouter une époque',
        'add_intercalary'   => 'Ajouter des jours intercalaires',
        'add_month'         => 'Ajouter un mois',
        'add_moon'          => 'Ajouter une lune',
        'add_reminder'      => 'Ajouter un rappel',
        'add_season'        => 'Ajouter une saison',
        'add_weather'       => 'Effet météo',
        'add_week'          => 'Ajouter un nom de semaine',
        'add_weekday'       => 'Ajouter un jour de semaine',
        'add_year'          => 'Ajouter un nom d\'année',
        'set_today'         => 'Définir en tant que jour actuel',
        'today'             => 'Aujourd\'hui',
        'update_weather'    => 'Modifier la météo',
    ],
    'checkboxes'    => [
        'is_recurring'  => 'A lieu chaque année',
    ],
    'create'        => [
        'title' => 'Nouveau Calendrier',
    ],
    'destroy'       => [],
    'edit'          => [
        'today' => 'Date du calendrier mise à jour.',
    ],
    'event'         => [
        'actions'   => [
            'existing'  => 'Entité Existante',
            'new'       => 'Nouvel Événement',
            'switch'    => 'Choix différent',
        ],
        'create'    => [
            'success'   => 'Evénement de calendrier ajouté.',
            'title'     => 'Ajouter un événement de calendrier à :name',
        ],
        'destroy'   => 'Evénement retiré du calendrier \':name\'.',
        'edit'      => [
            'success'   => 'Evénement de calendrier modifié.',
            'title'     => 'Modifier un événement de calendrier pour :name',
        ],
        'errors'    => [
            'invalid_entity'    => 'Choix invalide d\'entité.',
        ],
        'helpers'   => [
            'add'               => 'Ajouter un événement à ce calendrier en utilisant la liste à choix.',
            'new'               => 'Ou créer un nouveu événement en indiquant un nom.',
            'other_calendar'    => 'Modification d\'un événement du calendrier :calendar.',
        ],
        'modal'     => [
            'title' => 'Ajouter un événement au calendrier',
        ],
        'success'   => 'Evénement \':event\' ajouté au calendrier.',
    ],
    'events'        => [
        'end'       => '(fin)',
        'filters'   => [
            'show_after'    => 'Afficher aujourd\'hui et après',
            'show_all'      => 'Afficher tout',
            'show_before'   => 'Afficher avant aujourd\'hui',
        ],
        'start'     => '(début)',
    ],
    'fields'        => [
        'colour'                => 'Couleur',
        'comment'               => 'Commentaire',
        'current_day'           => 'Jour Actuel',
        'current_month'         => 'Mois actuel',
        'current_year'          => 'Année actuelle',
        'date'                  => 'Date actuelle',
        'day'                   => 'Jour',
        'default_layout'        => 'Mise en page par défaut',
        'format'                => 'Format',
        'intercalary'           => 'Jours Intercalaires',
        'is_incrementing'       => 'Incrément de date',
        'is_recurring'          => 'Récurrent',
        'leap_year'             => 'Années bissextiles',
        'leap_year_amount'      => 'Jours à ajouter',
        'leap_year_month'       => 'Mois',
        'leap_year_offset'      => 'Chaque',
        'leap_year_start'       => 'Année bissextile',
        'length'                => 'Durée de l\'événement',
        'length_days'           => ':count jour|:count jours',
        'month'                 => 'Mois',
        'months'                => 'Mois',
        'moons'                 => 'Lunes',
        'parameters'            => 'Paramètres',
        'recurring_periodicity' => 'Périodicity de récurrence',
        'recurring_until'       => 'Récurrent jusqu\'à l\'année',
        'reset'                 => 'Réinitialisation de semaine',
        'seasons'               => 'Saisons',
        'show_birthdays'        => 'Afficher les anniversaires',
        'skip_year_zero'        => 'Ignorer l\'année zéro',
        'start_offset'          => 'Décalage de début',
        'suffix'                => 'Suffix',
        'week_names'            => 'Nom de semaine',
        'weekdays'              => 'Jours de la semaine',
        'year'                  => 'Année',
    ],
    'helpers'       => [
        'default_layout'    => 'Choix de la mise en page par défaut du calendrier.',
        'format'            => 'Ajouter un format d\'affichage personnalisé pour les entités du calendrier.',
        'month_type'        => 'Les mois intercalaires n\'utilisent pas les jours de la semaine, mais ont quand-même une influence sur les lunes et saisons.',
        'moon_offset'       => 'Par défaut, la première pleine lune apparait lors du premier jour de l\'année 0. Modifier ce champ permet de définir quand la première pleine lune apparaitra. Cette valeur peut être négative (jusqu\'à la durée du premier mois) ou positive (jusqu\'à la durée du premier mois).',
        'nested_without'    => 'Affichage des calendriers sans parent. Cliquer sur une rangée pour afficher les calendriers enfants.',
        'start_offset'      => 'Un calendrier commence par défaut le premier jour de la première semaine de l\'année 0. Modifier ce champ permet d\'influencer quand le premier jour tombe.',
    ],
    'hints'         => [
        'event_length'      => 'La durée d\'un événement. Un événement ne peux pas durer plus de 2 mois.',
        'intercalary'       => 'Les jours tombants hors des mois et semaines standards. Ils n\'influenceronts pas le jour de semaine.',
        'is_incrementing'   => 'Un calendrier avec cette option vera son jour actuel automatiquement avancer chaque jour à 00:00 UTC.',
        'is_recurring'      => 'Un événement peut être récurrent. Il réapparaitera chaque année à la même date.',
        'leap_year'         => 'Définir les années bissextiles du calendrier.',
        'months'            => 'Le calendrier doit avoir au moins 2 mois.',
        'moons'             => 'Chaque lune sera affichée dans le calendrier lors de la pleine lune.',
        'parent_calendar'   => 'Définir un calendrier parent inclura les événements et la météo du celui-ci.',
        'reset'             => 'Toujours commencer le début du mois sur le premier jour de la semaine.',
        'seasons'           => 'Les saisons seront affichées dans le calendrier lorsqu\'elles commencent.',
        'show_birthdays'    => 'Afficher les anniversaires chaque année pour les personnages qui ont une date de naissance définie.',
        'skip_year_zero'    => 'Par défaut, la première année du calendrier est l\'année zéro. Activer cette option pour ignorer l\'année zéro.',
        'weekdays'          => 'Un calendrier doit posséder au moins 2 jours dans la semaine.',
        'weeks'             => 'Les semaines importantes du calendrier peuvent avoir un nom.',
        'years'             => 'Certaines années sont tellement importantes qu\'elles ont leur propre nom.',
    ],
    'index'         => [],
    'layouts'       => [
        'month'     => 'Mois',
        'monthly'   => 'Mensuel par défaut',
        'year'      => 'Année',
        'yearly'    => 'Annuel par défaut',
    ],
    'modals'        => [
        'switcher'  => [
            'title' => 'Changement d\'année',
        ],
    ],
    'month_types'   => [
        'intercalary'   => 'Intercalaire',
        'standard'      => 'Standard',
    ],
    'options'       => [
        'events'    => [
            'recurring_periodicity' => [
                'fullmoon'      => 'Pleine lune',
                'fullmoon_name' => ':moon pleine lune',
                'month'         => 'Chaque mois',
                'newmoon'       => 'Nouvelle lune',
                'newmoon_name'  => ':moon nouvelle lune',
                'none'          => 'Aucun',
                'unnamed_moon'  => 'Lune :number',
                'year'          => 'Chaque année',
            ],
        ],
        'resets'    => [
            ''      => 'Aucun',
            'month' => 'Mois',
            'year'  => 'Année',
        ],
    ],
    'panels'        => [
        'intercalary'   => 'Jours Intercalaires',
        'leap_year'     => 'Année bissextile',
        'months'        => 'Mois',
        'weeks'         => 'Semaines',
        'years'         => 'Nom d\'années',
    ],
    'parameters'    => [
        'intercalary'   => [
            'length'    => 'Durée en jour',
            'month'     => 'A la fin de quel mois',
            'name'      => 'Nom de l\'intercalaire',
        ],
        'month'         => [
            'alias' => 'Alias de mois',
            'length'=> 'Nombre de jours',
            'name'  => 'Nom du mois',
            'type'  => 'Type',
        ],
        'moon'          => [
            'fullmoon'  => 'Pleine lune chaque (jours)',
            'name'      => 'Nom de la lune',
            'offset'    => 'Décalage de la première pleine lune',
        ],
        'seasons'       => [
            'day'   => 'Jour de départ',
            'month' => 'Mois de départ',
            'name'  => 'Nom de la saison',
        ],
        'weeks'         => [
            'name'      => 'Nom de la semaine',
            'number'    => 'Nombre',
        ],
        'year'          => [
            'name'      => 'Nom',
            'number'    => 'Année',
        ],
    ],
    'placeholders'  => [
        'colour'            => 'Couleur',
        'comment'           => 'Anniversaire, festival, solstice',
        'date'              => 'La date actuelle',
        'leap_year_amount'  => 'Nombre de jours à ajouter lors d\'une année bissextile',
        'leap_year_month'   => 'Mois durant lequel les jours sont à ajouter',
        'leap_year_offset'  => 'Nombre d\'années entre chaque année bissextile',
        'leap_year_start'   => 'Première année bissextile',
        'length'            => 'Durée de l\'événement en jours',
        'months'            => 'Nombre de mois dans une année',
        'recurring_until'   => 'Année de dernière réoccurence (laisser vide pour infini)',
        'seasons'           => 'Nombre de saisons',
        'suffix'            => 'Suffix de l\'époque actuelle (AC, BC)',
        'type'              => 'Type de calendrier',
        'weekdays'          => 'Nombre de jours dans une semaine',
    ],
    'show'          => [
        'missing_details'       => 'Le calendrier ne peut pas être affiché. Un calendrier a besoin d\'au moins 2 mois et de 2 jours de la semaine pour être affiché correctement.',
        'moon_1first_quarter'   => ':moon premier quartier',
        'moon_full'             => ':moon pleine lune',
        'moon_last_quarter'     => ':moon dernier quartier',
        'moon_new'              => ':moon nouvelle lune',
        'tabs'                  => [
            'events'    => 'Evénements',
            'weather'   => 'Météo',
        ],
    ],
    'sorters'       => [
        'after' => 'Aujourd\'hui et après',
        'before'=> 'Aujourd\'hui et avant',
    ],
    'validators'    => [
        'format'        => 'Le format de calendrier est invalid.',
        'moon_offset'   => 'Le décalage de début de lune ne peut pas être plus grand que la durée du premier mois du calendrier.',
    ],
    'warnings'      => [
        'event_length'  => 'Les évènements de plusieurs années ne s\'affichent que durant les deux premières années. En savoir plus dans notre :documentation.',
    ],
];
