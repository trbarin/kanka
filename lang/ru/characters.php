<?php

return [
    'actions'       => [
        'add_appearance'    => 'Добавить внешнее качество',
        'add_organisation'  => 'Добавить организацию',
        'add_personality'   => 'Добавить личное качество',
    ],
    'conversations' => [
        'title' => 'Разговоры персонажа :name',
    ],
    'create'        => [
        'title' => 'Новый персонаж',
    ],
    'destroy'       => [],
    'dice_rolls'    => [
        'hint'  => 'Броски костей могут быть связаны с персонажем для использования в игре.',
        'title' => 'Броски костей персонажа :name',
    ],
    'edit'          => [],
    'fields'        => [
        'age'                       => 'Возраст',
        'families'                  => 'Семьи',
        'family'                    => 'Семья',
        'image'                     => 'Изображение',
        'is_appearance_pinned'      => 'Закрепить внешность',
        'is_dead'                   => 'Мертв(а)',
        'is_personality_pinned'     => 'Закрепить личность',
        'is_personality_visible'    => 'Показывать личные качества',
        'life'                      => 'Жизнь',
        'location'                  => 'Локация',
        'name'                      => 'Имя',
        'physical'                  => 'Физиология',
        'pronouns'                  => 'Местоимения',
        'race'                      => 'Раса',
        'races'                     => 'Расы',
        'sex'                       => 'Гендер',
        'title'                     => 'Титул',
        'traits'                    => 'Черты',
        'type'                      => 'Тип',
    ],
    'helpers'       => [
        'age'   => 'Этот объект можно связать с календарем вашей кампании, чтобы его возраст вычислялся автоматически. :more.',
    ],
    'hints'         => [
        'is_appearance_pinned'      => 'Внешние качества персонажа будут показаны ниже статьи во вкладке "Основное".',
        'is_dead'                   => 'Укажите, мертв ли этот персонаж.',
        'is_personality_pinned'     => 'Личные качества персонажа будут показаны ниже статьи во вкладке "Основное".',
        'is_personality_visible'    => 'Вы можете скрыть раздел "Личные качества" от всех пользователей, кроме админов.',
        'personality_not_visible'   => 'Личные качества этого персонажа могут видеть только админы.',
        'personality_visible'       => 'Личные качества этого персонажа могут видеть все.',
    ],
    'index'         => [
        'title' => 'Персонажи',
    ],
    'items'         => [
        'hint'  => 'Предметы можно связывать с персонажами, чтобы отображать их здесь.',
        'title' => 'Предметы персонажа :name',
    ],
    'journals'      => [
        'title' => 'Журналы персонажа :name',
    ],
    'maps'          => [
        'title' => 'Карта связей персонажа :name',
    ],
    'organisations' => [
        'actions'       => [
            'add'   => 'Добавить организацию',
        ],
        'create'        => [
            'success'   => 'Персонаж добавлен в организацию.',
            'title'     => 'Новая организация персонажа :name',
        ],
        'destroy'       => [
            'success'   => 'Организация персонажа удалена.',
        ],
        'edit'          => [
            'success'   => 'Организация персонажа обновлена.',
            'title'     => 'Редактирование организации персонажа :name',
        ],
        'fields'        => [
            'organisation'  => 'Организация',
            'role'          => 'Роль',
        ],
        'hint'          => 'Персонажа можно связать с несколькими организациями, показывающими, на кого персонаж работает или в каком тайном обществе состоит.',
        'placeholders'  => [
            'organisation'  => 'Выберите организацию',
        ],
        'title'         => 'Организации персонажа :name',
    ],
    'placeholders'  => [
        'age'               => 'Возраст',
        'appearance_entry'  => 'Описание',
        'appearance_name'   => 'Глаза, волосы, кожа, рост',
        'family'            => 'Выберите персонажа',
        'image'             => 'Изображение',
        'location'          => 'Выберите локацию',
        'name'              => 'Полное имя',
        'personality_entry' => 'Описание',
        'personality_name'  => 'Тип  (цели, поведение, страхи, принципы)',
        'physical'          => 'Физиология',
        'pronouns'          => 'Он, она, они',
        'race'              => 'Раса',
        'races'             => 'Выберите расы',
        'sex'               => 'Гендер',
        'title'             => 'Титул',
        'traits'            => 'Черты',
        'type'              => 'Персонаж игрока, Божество, NPC',
    ],
    'quests'        => [
        'helpers'   => [
            'quest_giver'   => 'Квесты, которые этот персонаж предлагает.',
            'quest_member'  => 'Квесты, в которых этот персонаж участвует.',
        ],
    ],
    'sections'      => [
        'appearance'    => 'Внешность',
        'general'       => 'Основная информация',
        'personality'   => 'Личность',
    ],
    'show'          => [
        'tabs'  => [
            'organisations' => 'Организации',
        ],
    ],
    'warnings'      => [
        'personality_hidden'    => 'Вы не можете редактировать личные качества этого персонажа.',
    ],
];
