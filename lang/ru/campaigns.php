<?php

return [
    'actions'                           => [],
    'create'                            => [
        'description'           => 'Создание новой кампании',
        'helper'                => [
            'title'     => 'Добро пожаловать в :name!',
            'welcome'   => <<<'TEXT'
Прежде чем продолжить, нужно дать название вашей кампании. Оно станет названием вашего мира. Если у вас пока нет подходящего названия, не волнуйтесь, у вас всегда будет возможность его изменить или создать новую кампанию.

Спасибо, что присоединились к Kanka, и добро пожаловать в наше процветающее сообщество!
TEXT
,
        ],
        'success'               => 'Кампания создана.',
        'success_first_time'    => 'Ваша кампания готова! Так как это ваша первая кампания, мы приготовили кое-что, чтобы помочь вам начать и даст вам представление о том, что можно создать с помощью Kanka.',
        'title'                 => 'Новая кампания',
    ],
    'destroy'                           => [
        'action'            => 'Удалить',
        'confirm'           => 'Вы уверены, что хотите удалить кампанию :campaign? Это действие необратимо, и кампанию будет невозможно восстановить.',
        'confirm-button'    => 'Безвозвратно удалить кампанию',
        'helper-v2'         => 'Эту кампанию нельзя удалить, пока в ней есть другие участники. Удалите оставшихся участников из кампании и попробуйте снова.',
        'hint'              => 'Если вы уверены, пожалуйста введите код :code в поле ниже.',
        'success'           => 'Кампания удалена.',
        'title'             => 'Удаление кампании.',
    ],
    'edit'                              => [
        'success'   => 'Кампания обновлена.',
        'title'     => 'Редактирование кампании :campaign',
    ],
    'entity_note_visibility'            => [],
    'entity_personality_visibilities'   => [
        'private'   => 'Скрывать личные качества новых персонажей',
    ],
    'entity_visibilities'               => [
        'private'   => 'Скрывать новые объекты',
    ],
    'errors'                            => [
        'access'        => 'У вас нет доступа к этой кампании.',
        'premium'       => 'Эта функция доступна только премиум кампаниям.',
        'unknown_id'    => 'Неизвестная кампания.',
    ],
    'export'                            => [],
    'fields'                            => [
        'boosted'                           => 'Усиливает',
        'character_personality_visibility'  => 'Скрытие личных качеств персонажей',
        'connections'                       => 'Показывать по умолчанию таблицу связей объекта (вместо карты связей для премиум кампаний)',
        'css'                               => 'CSS',
        'description'                       => 'Описание',
        'entity_count'                      => 'Объекты',
        'entity_privacy'                    => 'Скрытие новых объектов',
        'entry'                             => 'Описание кампании',
        'excerpt'                           => 'Текст заголовка кампании',
        'featured'                          => 'Избранная кампания',
        'followers'                         => 'Отслеживают',
        'genre'                             => 'Жанр(ы)',
        'header_image'                      => 'Фон заголовка кампании',
        'image'                             => 'Изображение боковой панели',
        'locale'                            => 'Язык',
        'name'                              => 'Название',
        'nested'                            => 'Сворачивать списки объектов по умолчанию',
        'open'                              => 'Принимать заявки на вступление',
        'past_featured'                     => 'Бывшая избранная кампания',
        'post_collapsed'                    => 'Сворачивать новые посты объектов',
        'premium'                           => 'Премиум открыт :name',
        'public'                            => 'Доступность кампании',
        'public_campaign_filters'           => 'Фильтры для публичной кампании',
        'related_visibility'                => 'Доступ элементов объектов',
        'superboosted'                      => 'Супер-усиливает',
        'system'                            => 'Система',
        'theme'                             => 'Тема',
        'vanity'                            => 'Уникальный URL',
        'visibility'                        => 'Доступ',
    ],
    'following'                         => 'Отслеживаемые',
    'helpers'                           => [
        'boosted'                           => 'Некоторые функции стали доступны благодаря усилению кампании. Подробнее здесь: :settings.',
        'character_personality_visibility'  => 'Укажите, нужно ли по умолчанию скрывать личные качества нового персонажа, создаваемого админом.',
        'css'                               => 'Напишите здесь собственный код на CSS, и он будет использоваться на страницах вашей кампании. Пожалуйста, обратите внимание, что любое злоупотребление этой функцией может привести к удалению вашего CSS. Повторные или серьезные нарушения могут привести к удалению вашей кампании.',
        'dashboard'                         => 'Настройте вид виджета заголовка кампании в обзоре с помощью следующих полей.',
        'entity_count_v3'                   => 'Это число обновляется каждые :amount часов.',
        'entity_privacy'                    => 'Укажите, нужно ли по умолчанию скрывать новый объект, создаваемый админом.',
        'excerpt'                           => 'Содержимое этого поля будет отображено в виджете заголовка кампании в обзоре. Напишите пару строк, знакомящих с вашим миром. Если оставить это поле пустым, то будет использоваться первая 1000 символов статьи кампании.',
        'header_image'                      => 'Изображение для фона заголовка кампании в обзоре.',
        'hide_history'                      => 'Доступ к истории объектов (журналу изменений) будут иметь только участники с ролью :admin.',
        'hide_members'                      => 'Доступ к списку участников кампании будут иметь только участники с ролью :admin.',
        'locale'                            => 'Язык, на котором написана ваша кампания. Это нужно для генерации контента и группирования публичных кампаний.',
        'name'                              => 'Название кампании или мира может быть любым, но оно должно содержать не меньше 4 букв или цифр.',
        'no_entry'                          => 'Похоже у этой кампании еще нет описания! Давайте это исправим.',
        'permissions_tab'                   => 'Укажите доступ и скрытие новых элементов с помощью следующих настроек.',
        'premium'                           => 'Некоторые функции стали доступны благодаря открытию премиума для кампании. Подробнее здесь: :settings.',
        'public_campaign_filters'           => 'Помогите другим найти эту кампанию среди других публичных кампаний, предоставив следующую информацию.',
        'public_no_visibility'              => 'Внимание! Ваша кампания является публичной, но у роли "Посетитель" нет доступа к каким-либо объектам. :fix.',
        'related_visibility'                => 'Настройка доступа по умолчанию для новых элементов с полем "Доступ" (посты, связи, способности и т.д.)',
        'system'                            => 'Если ваша кампания публичная, то ее система будет показана здесь: :link.',
        'systems'                           => 'Чтобы не заваливать пользователей настройками, некоторые функции Kanka (статблок монстра D&D 5 ред.) доступны только определенным ролевым системам. Добавьте сюда поддерживаемые системы, чтобы открыть эти функции.',
        'theme'                             => 'Установите тему кампании, не зависящую от предпочтений пользователя.',
        'view_public'                       => 'Чтобы увидеть вашу кампанию, как ее видит посетитель, откройте следующую ссылку в режиме инкогнито: :link.',
        'visibility'                        => 'Публичную кампанию может видеть любой, у кого есть на нее ссылка.',
    ],
    'index'                             => [
        'actions'   => [
            'new'   => [
                'title' => 'Новая кампания',
            ],
        ],
    ],
    'invites'                           => [
        'actions'               => [
            'copy'  => 'Скопировать ссылку в буфер обмена',
            'link'  => 'Пригласить',
        ],
        'create'                => [
            'buttons'       => [
                'create'    => 'Создать ссылку',
            ],
            'success_link'  => 'Ссылка создана: :link',
            'title'         => 'Приглашение в :campaign',
        ],
        'destroy'               => [
            'success'   => 'Приглашение удалено.',
        ],
        'error'                 => [
            'already_member'    => 'Вы уже являетесь участником этой кампании.',
            'inactive_token'    => 'Этот токен уже использовался или этой кампании больше не существует.',
            'invalid_token'     => 'Этот токен больше не действителен.',
            'login'             => 'Пожалуйста, войдите или зарегистрируйтесь, чтобы присоединиться к этой кампании.',
        ],
        'fields'                => [
            'created'   => 'Создана',
            'role'      => 'Роль',
            'token'     => 'Токен',
            'type'      => 'Тип',
            'usage'     => 'Лимит на число переходов',
        ],
        'unlimited_validity'    => 'Без лимита',
        'usages'                => [
            'five'      => '5 переходов',
            'no_limit'  => 'Без лимита',
            'once'      => '1 переход',
            'ten'       => '10 переходов',
        ],
    ],
    'leave'                             => [
        'confirm'           => 'Вы уверены, что хотите покинуть кампанию :name? Вы не сможете получить к ней доступ, пока ее админ не пригласит вас обратно.',
        'confirm-button'    => 'Да, покинуть кампанию',
        'error'             => 'Невозможно покинуть кампанию.',
        'fix'               => 'К участникам кампании',
        'no-admin-left'     => 'Покинуть кампанию невозможно, поскольку в этом случае в ней не останется админов. Добавьте еще одного участника в роль админа и попробуйте снова.',
        'success'           => 'Вы покинули кампанию.',
        'title'             => 'Выход из кампании',
    ],
    'members'                           => [
        'actions'               => [
            'remove'        => 'Удалить из кампании',
            'switch'        => 'Тестировать',
            'switch-back'   => 'Конец тестирования',
            'switch-entity' => 'Тестировать',
        ],
        'create'                => [
            'title' => 'Добавление участника в кампанию',
        ],
        'edit'                  => [
            'title' => 'Редактирование участника :name',
        ],
        'fields'                => [
            'banned'        => 'Участник заблокирован',
            'joined'        => 'Дата присоединения',
            'last_login'    => 'Последний вход',
            'name'          => 'Пользователь',
            'role'          => 'Роль',
            'roles'         => 'Роли',
        ],
        'helpers'               => [
            'switch'    => 'Тестировать разрешения пользователя',
        ],
        'impersonating'         => [
            'message'   => 'Вы просматриваете кампанию как другой пользователь. Некоторые функции отключены, но остальные работают именно так, как их видит этот пользователь.',
            'title'     => 'Тестирование :name',
        ],
        'invite'                => [
            'description'   => 'Чтобы добавить участников в кампанию, создайте пригласительную ссылку и отправьте им полученный URL. После принятия приглашения, они будут добавлены в кампанию как участники указанной роли.',
            'more'          => 'Вы можете создать больше ролей на :link.',
            'roles_page'    => 'странице ролей',
            'title'         => 'Приглашения',
        ],
        'manage_roles'          => 'Настроить роли',
        'removal'               => 'Вы удаляете участника :member из кампании.',
        'roles'                 => [
            'member'    => 'Участник',
            'owner'     => 'Админ',
            'player'    => 'Игрок',
            'public'    => 'Посетитель',
            'viewer'    => 'Наблюдатель',
        ],
        'switch_back_success'   => 'Теперь вы снова просматриваете кампанию от своего лица.',
        'title'                 => 'Участники - :name',
        'updates'               => [
            'added'     => 'Пользователь :user получил роль ":role".',
            'removed'   => 'Пользователь :user потерял роль ":role".',
        ],
    ],
    'modules'                           => [
        'permission-disabled'   => 'Этот модуль отключен.',
    ],
    'open_campaign'                     => [],
    'options'                           => [],
    'overview'                          => [
        'entity-count'      => '{0} Нет объектов|{1} :amount объект|[2,4] :amount объекта|[5,*] :amount объектов',
        'follower-count'    => '{0} Нет отслеживающих|{1} :amount отслеживает|[2,*] :amount отслеживают',
    ],
    'panels'                            => [
        'dashboard' => 'Обзор',
        'permission'=> 'Разрешения',
        'setup'     => 'Настройка',
        'sharing'   => 'Доступность',
        'systems'   => 'Системы',
        'ui'        => 'Интерфейс',
    ],
    'placeholders'                      => [
        'description'   => 'Небольшой рассказ о вашей кампании',
        'locale'        => 'Название языка',
        'name'          => 'Название вашей кампании',
        'system'        => 'D&D, Pathfinder, Fate, DSA',
    ],
    'privacy'                           => [
        'hidden'    => 'Не показывать',
        'private'   => 'Скрывать',
        'visible'   => 'Показывать',
    ],
    'public'                            => [
        'helpers'   => [
            'introduction'  => 'По умолчанию кампании являются приватными, но их можно сделать публичными. Это делает их открытыми для всех, а если в них есть объекты доступные роли :public-role, то и доступными здесь: :public-campaigns. Публичные кампании видны всем, но чтобы ее содержимое было открытым, роли :public-role нужны соответствующие разрешения.',
        ],
    ],
    'roles'                             => [
        'actions'       => [
            'add'           => 'Создать роль',
            'duplicate'     => 'Создать копию',
            'permissions'   => 'Настройка разрешений',
            'rename'        => 'Переименовать',
            'save'          => 'Сохранить роль',
        ],
        'admin_role'    => 'ролью админа',
        'bulks'         => [
            'delete'    => '{1} Удалена :count роль.|[2,4] Удалено :count роли.|[5,*] Удалено :count ролей.',
            'edit'      => '{1} Обновлена :count роль.|[2,4] Обновлено :count роли.|[5,*] Обновлено :count ролей.',
        ],
        'create'        => [
            'success'   => 'Роль ":name" создана.',
            'title'     => 'Новая роль',
        ],
        'destroy'       => [
            'success'   => 'Роль ":name" удалена.',
        ],
        'edit'          => [
            'success'   => 'Роль ":name" обновлена.',
            'title'     => 'Редактирование роли :name',
        ],
        'fields'        => [
            'copy_permissions'  => 'Копировать разрешения',
            'name'              => 'Название',
            'permissions'       => 'Разрешения',
            'type'              => 'Тип',
            'users'             => 'Пользователи',
        ],
        'helper'        => [
            '1' => 'Ролей в кампании может быть сколько угодно. Роль :admin автоматически дает доступ ко всему, что есть в кампании. Остальным ролям можно задать отдельные разрешения для каждого типа объектов (персонажи, локации и т. д.).',
            '2' => 'Можно задавать разрешения отдельным объектам во вкладке "Разрешения" при их редактировании. Эта вкладка отображается, если в кампании несколько ролей или участников.',
            '3' => 'Можно либо последовать "принципу исключений", открыв ролям доступ ко всем объектам, и скрывать отдельные объекты от всех кроме админов, либо не давать ролям много разрешений, но сделать все объекты видимыми.',
            '4' => 'Ролей в усиленной кампании может быть сколько угодно.',
        ],
        'hints'         => [
            'campaign_not_public'   => 'У роли "Посетитель" есть разрешения, хотя это приватная кампания. Это можно изменить во вкладке "Доступность" при редактировании кампании.',
            'empty_role'            => 'В этой роли пока нет участников.',
            'role_admin'            => 'Роль :name автоматически дает участнику доступ ко всему в кампании.',
            'role_permissions'      => 'Выберите действия, к которым будет иметь доступ роль ":name", для каждого типа объектов.',
        ],
        'members'       => 'Участники',
        'modals'        => [
            'details'   => [
                'campaign'  => 'Разрешения раздела "Кампания" позволяют следующее:',
                'entities'  => 'Вот краткое пояснение того, что участники этой роли могут делать при каждом разрешении.',
                'more'      => 'Для более подробного объяснения, смотрите наше видео на YouTube.',
                'title'     => 'Пояснение разрешений',
            ],
        ],
        'permissions'   => [
            'actions'   => [
                'add'           => 'Создать',
                'dashboard'     => 'Обзор',
                'delete'        => 'Удалить',
                'edit'          => 'Изменить',
                'entity-note'   => 'Посты',
                'manage'        => 'Управление',
                'members'       => 'Участники',
                'permission'    => 'Разрешения',
                'read'          => 'Смотреть',
                'toggle'        => 'Изменить для всех',
            ],
            'helpers'   => [
                'add'           => 'Позволяет создавать объекты этого типа. Участникам роли будет автоматически разрешено редактировать созданные ими объекты и просматривать их, если у роли нет разрешений на просмотр и редактирование.',
                'dashboard'     => 'Позволяет редактировать обзоры и виджеты обзоров.',
                'delete'        => 'Позволяет удалять все объекты этого типа.',
                'edit'          => 'Позволяет редактировать все объекты этого типа.',
                'entity_note'   => 'Позволяет даже пользователям без разрешения на редактирование объекта добавлять к нему посты.',
                'manage'        => 'Позволяет редактировать кампанию как админ, но не позволяет удалять ее.',
                'members'       => 'Позволяет приглашать новых участников в кампанию.',
                'permission'    => 'Позволяет настраивать разрешения объектов этого типа, которые участник может редактировать.',
                'read'          => 'Позволяет просматривать все объекты этого типа, кроме скрытых.',
            ],
        ],
        'placeholders'  => [
            'name'  => 'Название роли',
        ],
        'show'          => [
            'title' => 'Роль ":role"',
        ],
        'title'         => 'Роли - :name',
        'types'         => [
            'owner'     => 'Админ',
            'public'    => 'Посетитель',
            'standard'  => 'Основной',
        ],
        'users'         => [
            'actions'   => [
                'add'           => 'Добавить участника',
                'remove'        => ':user из роли ":role"',
                'remove_user'   => 'Удалить пользователя из роли',
            ],
            'create'    => [
                'success'   => 'Пользователь добавлен в роль.',
                'title'     => 'Добавление участника в роль ":name"',
            ],
            'destroy'   => [
                'success'   => 'Пользователь удален из роли.',
            ],
            'errors'    => [
                'cant_kick_admins'  => 'Во избежание злоупотребления лишить другого участника роли :admin невозможно. Если возникнут проблемы, свяжитесь с нами на :discord или напишите на :email.',
                'needs_more_roles'  => 'Вам нужно получить другую роль в этой кампании, прежде чем вы сможете лишить себя роли ":admin".',
            ],
            'fields'    => [
                'name'  => 'Имя',
            ],
        ],
    ],
    'settings'                          => [
        'actions'       => [
            'enable'    => 'Подключить',
        ],
        'boosted'       => 'Эта функция находится в раннем доступе и пока доступна только для :boosted.',
        'deprecated'    => [
            'help'  => 'Этот модуль устарел, то есть больше не обновляется и не тестируется на баги при обновлениях Kanka. Пользуйтесь им, принимая во внимание, что рано им поздно он будет удален из Kanka.',
            'title' => 'Устаревший',
        ],
        'disabled'      => 'Модуль :module отключен.',
        'enabled'       => 'Модуль :module подключен.',
        'errors'        => [
            'module-disabled'   => 'Запрошенный модуль в данный момент отключен в настройках кампании. :fix.',
        ],
        'helpers'       => [
            'abilities'     => 'Создавайте способности, будь то навыки, заклинания или силы, и присваивайте их объектам.',
            'calendars'     => 'Здесь можно создавать календари для вашего мира.',
            'characters'    => 'Населяющие ваш мир личности.',
            'conversations' => 'Выдуманные разговоры между персонажами или пользователями кампании. Этот модуль устарел.',
            'creatures'     => 'Создавайте существ, животных и монстров с помощью модуля существ.',
            'dice_rolls'    => 'Упрощает работу с бросками костей тем, кто использует Kanka для RPG кампаний. Этот модуль устарел.',
            'events'        => 'Праздники, фестивали, катастрофы, дни рожденья, войны.',
            'families'      => 'Кланы и семьи, их члены и связи.',
            'inventories'   => 'Создавайте инвентари для своих объектов.',
            'items'         => 'Оружие, транспорт, реликвии, зелья.',
            'journals'      => 'Наблюдения, записанные персонажами, или подготовка ДМа к сессии.',
            'locations'     => 'Планеты, схемы, континенты, реки, государства, поселения, храмы, таверны.',
            'maps'          => 'Создавайте карты со слоями и метками, указывающими на другие объекты кампании.',
            'notes'         => 'Наука, природа, история, магия, культура.',
            'organisations' => 'Культы, религии, фракции, гильдии.',
            'quests'        => 'Создавайте разнообразные квесты с персонажами и локациями.',
            'races'         => 'Это поможет не запутаться, если в вашей кампании больше одной расы.',
            'tags'          => 'У каждого объекта могут быть тэги. У тэгов могут быть свои тэги, а статьи можно фильтровать по тэгам.',
            'timelines'     => 'Расскажите историю вашего мира с помощью хронологий.',
        ],
    ],
    'show'                              => [
        'actions'   => [
            'edit'  => 'Редактировать',
            'leave' => 'Покинуть кампанию',
        ],
        'menus'     => [
            'configuration'     => 'Компоненты',
            'overview'          => 'Основное',
            'user_management'   => 'Пользователи',
        ],
        'tabs'      => [
            'achievements'      => 'Достижения',
            'applications'      => 'Заявки',
            'campaign'          => 'Кампания',
            'default-images'    => 'Эскизы',
            'export'            => 'Экспорт',
            'information'       => 'Информация',
            'members'           => 'Участники',
            'plugins'           => 'Плагины',
            'recovery'          => 'Восстановление',
            'roles'             => 'Роли',
            'sidebar'           => 'Боковая панель',
            'styles'            => 'Стили',
        ],
        'title'     => 'Основное - :name',
    ],
    'superboosted'                      => [],
    'themes'                            => [
        'none'  => 'Не важно (по выбору пользователя)',
    ],
    'ui'                                => [
        'collapsed'         => [
            'collapsed' => 'Свернутый',
            'default'   => 'Развернутый',
        ],
        'connections'       => [
            'explorer'  => 'Карта связей (усиленные кампании)',
            'list'      => 'Таблица связей',
        ],
        'entity_history'    => [
            'hidden'    => 'Видны только админам кампании',
            'visible'   => 'Видны участникам',
        ],
        'fields'            => [
            'connections'       => 'Интерфейс связей объекта',
            'connections_mode'  => 'Вид карты связей',
            'entity_history'    => 'Журналы изменений объектов',
            'entity_image'      => 'Изображение объекта',
            'member_list'       => 'Список участников кампании',
            'nested'            => 'Вид списков',
            'post_collapsed'    => 'Вид новых постов',
        ],
        'helpers'           => [
            'connections'       => 'Выберите интерфейс, используемый по умолчанию при открытии вкладки связей объекта.',
            'connections_mode'  => 'Выберите вид, используемый по умолчанию при открытии карты связей объекта.',
            'other'             => 'Другие параметры интерфейса кампании.',
            'post_collapsed'    => 'Выберите вид поста, использующийся по умолчанию при создании нового поста.',
            'tooltip'           => 'Укажите, какую информацию следует показывать в подсказке объекта, при наведении на него курсора.',
        ],
        'members'           => [
            'hidden'    => 'Виден только админам кампании',
            'visible'   => 'Виден участникам',
        ],
        'nested'            => [
            'nested'    => 'Свернутый',
        ],
        'other'             => 'Другое',
    ],
    'visibilities'                      => [
        'private'   => 'Приватная',
        'public'    => 'Публичная',
        'review'    => 'На проверке',
    ],
    'warning'                           => [],
];
