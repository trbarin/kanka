<?php

return [
    'campaign'          => [
        'application'           => [
            'approved'              => 'Ваша заявка на вступление в кампанию :campaign одобрена.',
            'approved_message'      => 'Ваша заявка на вступление в кампанию :campaign одобрена. Сообщение: :reason',
            'new'                   => 'Новая заявка на вступление в кампанию :campaign.',
            'rejected'              => 'Ваша заявка на вступление в кампанию :campaign отклонена. Причина: :reason',
            'rejected_no_message'   => 'Ваша заявка на вступление в кампанию :campaign отклонена.',
        ],
        'asset_export'          => 'Экспорт изображений кампании готов. Ссылка доступна в течение :time минут.',
        'asset_export_error'    => 'При экспорте изображений вашей кампании произошла ошибка. Это может случатся с большими кампаниями.',
        'boost'                 => [
            'add'           => 'Кампанию :campaign теперь усиливает :user.',
            'remove'        => 'Пользователь :user перестал усиливать кампанию :campaign.',
            'superboost'    => 'Кампанию :campaign теперь супер-усиливает :user.',
        ],
        'deleted'               => 'Кампания :campaign была удалена.',
        'export'                => 'Экспорт кампании готов. Ссылка доступна в течение :time минут.',
        'export_error'          => 'При экспорте изображений вашей кампании произошла ошибка. Пожалуйста, свяжитесь с нами, если проблема повторится.',
        'hidden'                => 'Кампания :campaign убрана со страницы публичных кампаний.',
        'join'                  => 'Пользователь :user присоединился к кампании :campaign.',
        'leave'                 => 'Пользователь :user покинул кампанию :campaign.',
        'plugin'                => [
            'deleted'   => 'Плагин :plugin удален из каталога и из вашей кампании :campaign.',
        ],
        'role'                  => [
            'add'       => 'Вы были добавлены в роль :role в кампании :campaign.',
            'remove'    => 'Вы были удалены из роли :role в кампании :campaign.',
        ],
        'shown'                 => 'Кампания :campaign добавлена на страницу публичных кампаний.',
        'troubleshooting'       => [
            'joined'    => 'Член команды Kanka :user присоединился к кампании :campaign.',
        ],
    ],
    'clear'             => [
        'action'    => 'Очистить все',
        'success'   => 'Уведомления удалены.',
        'title'     => 'Очистить уведомления.',
    ],
    'header'            => 'У вас :count уведомлений',
    'index'             => [
        'title' => 'Уведомления',
    ],
    'no_notifications'  => 'Пока уведомлений нет.',
    'subscriptions'     => [
        'charge_fail'   => 'При обработке вашей оплаты произошла ошибка. Пожалуйста, подождите немного, пока мы попробуем обработать ее еще раз. Пожалуйста, свяжитесь с нами, если ничего не изменится.',
        'deleted'       => 'Ваша подписка на Kanka была отменена из-за слишком большого количества неудачных попыток снятия денег с вашей карты. Пожалуйста, перейдите в настройки подписок и попробуйте обновить параметры вашей оплаты.',
        'ended'         => 'Ваша подписка на Kanka закончилась. Ваши усилители кампаний и роли в Discord были удалены. Надеемся вы скоро вернетесь!',
        'failed'        => 'Не удалось совершить оплату по вашим параметрам оплаты. Пожалуйста обновите их настройках способа оплаты.',
        'started'       => 'Ваша подписка на Kanka оформлена.',
    ],
    'unread'            => 'Новое уведомление',
];
