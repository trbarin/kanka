<?php

return [
    'fields'    => [
        'type'  => 'Tipo de Evento',
    ],
    'helpers'   => [
        'characters'    => 'Definir o tipo como data de nascimento ou morte para este personagem irá calcular automaticamente sua idade. more.',
        'founding'      => 'Definir o tipo como :type calculará automaticamente a idade da entidade desde a fundação.',
        'no_events'     => 'Essa interface mostra todos os calendários que essa entidade está ligada ao usar lembretes.',
    ],
    'show'      => [
        'actions'   => [
            'add'   => 'Adicionar lembrete',
        ],
        'title'     => 'Lembretes :name',
    ],
    'types'     => [
        'birth'     => 'Nascimento',
        'death'     => 'Morte',
        'founded'   => 'Fundado',
        'primary'   => 'Primário',
    ],
    'years-ago' => '{1} :count ano atrás|[2,*] :count anos atrás',
];