<?php

return [
    'actions'       => [
        'add'   => 'Добавить новую эру',
    ],
    'create'        => [
        'success'   => 'Эра ":name" создана.',
        'title'     => 'Новая эра',
    ],
    'delete'        => [
        'success'   => 'Эра ":name" удалена.',
    ],
    'edit'          => [
        'success'   => 'Эра ":name" обновлена.',
        'title'     => 'Редактирование эры :name',
    ],
    'fields'        => [
        'abbreviation'  => 'Сокращение',
        'end_year'      => 'Год конца',
        'is_collapsed'  => 'Свернутая',
        'start_year'    => 'Год начала',
    ],
    'helpers'       => [
        'eras'          => 'Прежде чем добавлять в хронологию эры, ее нужно создать.',
        'is_collapsed'  => 'Эра будет свернута по умолчанию.',
        'primary'       => 'Разделяйте ваши хронологии на эры. Для правильной работы в хронологии должна быть хотя бы одна эра.',
    ],
    'placeholders'  => [
        'abbreviation'  => 'н. э., до н. э.',
        'end_year'      => 'Год, которым заканчивается эра. Оставьте пустым, если это текущая эра.',
        'name'          => 'Современная эра, бронзовый век, галактические войны',
        'start_year'    => 'Год, с которого начинается эра. Оставьте пустым, если это первая эра.',
    ],
    'reorder'       => [
        'eras_success'  => 'Порядок эр изменен.',
        'menu'          => 'Изменить порядок эр',
        'title'         => 'Изменение порядка эр',
    ],
];
