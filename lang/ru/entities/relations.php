<?php

return [
    'actions'           => [
        'mode-map'      => 'Карта связей',
        'mode-table'    => 'Таблица связей',
    ],
    'bulk'              => [
        'delete'            => '{1} Удалена :count связь.|[2,4] Удалено :count связи.|[5,*] Удалено :count связей.',
        'delete_mirrored'   => 'Также удалить зеркальные связи',
        'success'           => [
            'editing'           => '{1} Обновлена :count связь.|[2,4] Обновлено :count связи.|[5,*] Обновлено :count связей.',
            'editing_partial'   => '{1} Обновлена :count из :total связей.|[2,*] Обновлено :count из :total связей.',
        ],
        'update_mirrored'   => 'Также обновить зеркальные связи',
    ],
    'call-to-action'    => 'Исследуйте связи объекта и его отношение к другим объектам кампании наглядно.',
    'connections'       => [
        'map_point'         => 'Точка на карте',
        'mention'           => 'Упоминание',
        'quest_element'     => 'Элемент квеста',
        'timeline_element'  => 'Элемент хронологии',
    ],
    'create'            => [
        'new_title' => 'Новая связь',
        'success'   => 'Связь с объектом ":target" добавлена объекту ":entity".',
        'title'     => 'Новая связь объекта :name',
    ],
    'delete_mirrored'   => [
        'helper'    => 'Выберите, чтобы также удалить зеркальную связь у объекта связи.',
        'option'    => 'Удалить зеркальную связь',
    ],
    'destroy'           => [
        'mirrored'  => 'Зеркальная связь также будет удалена. Это действие необратимо.',
        'success'   => 'Связь объекта ":entity" с объектом ":target" удалена.',
    ],
    'fields'            => [
        'attitude'          => 'Отношение',
        'connection'        => 'Тип связанного',
        'is_star'           => 'Закреплена',
        'owner'             => 'Обладатель',
        'relation'          => 'Связь',
        'target'            => 'Объект связи',
        'target_relation'   => 'Название у объекта связи',
        'two_way'           => 'Создать зеркальную связь',
    ],
    'helper'            => 'Соединяйте объекты связями, настраивайте отношения и доступ. Также связи можно закрепить в меню объекта.',
    'helpers'           => [
        'no_relations'  => 'Сейчас у этого объекта нет связей с другими объектами кампании.',
        'popup'         => 'Объекты кампании можно соединять связями, которым можно дать описание, уровень отношения, доступ для контроля видимости связи и не только.',
    ],
    'hints'             => [
        'attitude'          => 'Это необязательное поле можно использовать для сортировки списков.',
        'mirrored'          => [
            'text'  => 'Эта связь зеркальна связи объекта :link.',
            'title' => 'Зеркальная связь',
        ],
        'target_relation'   => 'Название связи у связанного объекта. Оставьте пустым, чтобы использовать то же название, что и для связи этого объекта.',
        'two_way'           => 'Если сделать связь зеркальной, то такая же связь будет создана для объекта связи. Но, если одну из связей отредактировать, зеркальная не изменится.',
    ],
    'index'             => [
        'title' => 'Связи',
    ],
    'options'           => [
        'mentions'          => 'Связи + связанное + упоминания',
        'only_relations'    => 'Только прямые связи',
        'related'           => 'Связи + связанное',
        'relations'         => 'Связи',
        'show'              => 'Показать',
    ],
    'panels'            => [
        'related'   => 'Связанное',
    ],
    'placeholders'      => [
        'attitude'  => 'От -100 до 100, где 100 это очень позитивное',
        'relation'  => 'Соперник, лучший друг, родственник',
        'target'    => 'Выберите объект',
    ],
    'show'              => [
        'title' => 'Связи объекта :name',
    ],
    'types'             => [
        'family_member'         => 'Член семьи',
        'organisation_member'   => 'Член организации',
    ],
    'update'            => [
        'success'   => 'Связь объекта ":entity" с объектом ":target" обновлена.',
        'title'     => 'Редактирование связи объекта :name',
    ],
];
