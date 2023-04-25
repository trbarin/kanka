<?php

return [
    'actions'                           => [
        'boost' => 'Підсилити :name',
    ],
    'create'                            => [
        'description'           => 'Створити нову кампанію',
        'helper'                => [
            'title'     => 'Вітаємо у :name',
            'welcome'   => <<<'TEXT'
Перш ніж рушити далі, вам треба вказати назву кампанії. Це назва вашого світу. Якщо ви ще не маєте гарної назви, ви завжди зможете її змінити, або створити нову кампанію.

Дякуємо, що обрали Kanka! Вітаємо вас у цій жвавій спільноті!
TEXT
,
        ],
        'success'               => 'Кампанія створена.',
        'success_first_time'    => 'Вашу кампанію створено! Оскільки це ваша перша кампанія, ми створили кілька речей, щоб допомогти вам почати та, якщо пощастить, підкинути вам натхнення для власних ідей.',
        'title'                 => 'Нова кампанія',
    ],
    'destroy'                           => [
        'action'            => 'Видалити кампанію',
        'confirm'           => 'Ви впевнені, що хочете видалити :campaign? Ця дія є постійною і її не можна скасувати.',
        'confirm-button'    => 'Назавжди видалити кампанію',
        'helper-v2'         => 'Цю кампанію неможливо видалити, поки в ній є інші учасники. Спочатку видаліть інших учасників, а тоді спробуйте знову.',
        'hint'              => 'Якщо так, будь ласка, напишіть :code в полі нижче.',
        'success'           => 'Кампанію видалено.',
        'title'             => 'Видалити кампанію',
    ],
    'edit'                              => [
        'success'   => 'Кампанію оновлено.',
        'title'     => 'Редагувати кампанію :campaign',
    ],
    'entity_personality_visibilities'   => [
        'private'   => 'Особистості нових персонажів за замовчанням приватні.',
    ],
    'entity_visibilities'               => [
        'private'   => 'Нові сутності приватні',
    ],
    'errors'                            => [
        'access'        => 'Ви не маєте доступу до цієї кампанії.',
        'superboosted'  => 'Ця функція доступна тільки для суперпідсилених кампаній.',
        'unknown_id'    => 'Невідома кампанія.',
    ],
    'fields'                            => [
        'boosted'                           => 'Підсилено',
        'character_personality_visibility'  => 'Видимість особистості персонажа за замовчанням',
        'connections'                       => 'Показувати таблицю зв\'язків сутностей за замовчанням (замість відношення для підсилених кампаній)',
        'css'                               => 'CSS',
        'description'                       => 'Опис',
        'entity_count'                      => 'Кількість',
        'entity_privacy'                    => 'Приватність нової сутності за замовчанням',
        'entry'                             => 'Опис кампанії',
        'excerpt'                           => 'Текст панелі кампанії',
        'featured'                          => 'Особлива кампанія',
        'followers'                         => 'Спостерігачі',
        'header_image'                      => 'Зображення тла  панелі кампанії',
        'image'                             => 'Зображення бічної панелі',
        'locale'                            => 'Локаль',
        'name'                              => 'Назва',
        'nested'                            => 'Список сутностей для розміщення за замовчанням, якщо доступно',
        'open'                              => 'Відкрити в додатку',
        'past_featured'                     => 'Раніше підсилювана кампанія',
        'post_collapsed'                    => 'Нові дописи в сутностях за замовчанням згорнуті.',
        'public'                            => 'Видимість кампанії',
        'public_campaign_filters'           => 'Публічні фільтри кампанії',
        'related_visibility'                => 'Видимість пов\'язаних елементів',
        'rpg_system'                        => 'Системи НРІ',
        'superboosted'                      => 'Суперпідсилена',
        'system'                            => 'Система',
        'theme'                             => 'Тема',
        'visibility'                        => 'Видимість',
    ],
    'following'                         => 'Спостерігання',
    'helpers'                           => [
        'boost_required'                    => 'Ця функція потребує, щоб кампанія була підсилена. Більше на сторінці :settings.',
        'boost_required_multi'              => 'Ці функції потребують, щоб кампанія була підсилена. Більше на сторінці :settings.',
        'boosted'                           => 'Деякі функції розблоковані, бо кампанія підсилена. Дізнайтеся більше на сторінці :settings.',
        'character_personality_visibility'  => 'Створюючи нового персонажа як адміна, виберіть налаштування конфіденційності за замовчанням для його особистісних рис.',
        'css'                               => 'Напишіть власний CSS, який буде завантажено на сторінки вашої кампанії. Зауважте, що будь-яке зловживання цією функцією може призвести до видалення вашого власного CSS. Повторні або серйозні порушення можуть призвести до видалення вашої кампанії.',
        'dashboard'                         => 'Налаштуйте спосіб відображення віджета інформаційної панелі кампанії, заповнивши наведені нижче поля.',
        'entity_count_v3'                   => 'Це число перераховується кожні :amount годин.',
        'entity_privacy'                    => 'Створюючи нову сутність як адміністратор, виберіть налаштування конфіденційності за замовчанням для нової сутності.',
        'excerpt'                           => 'Вміст цього поля відображатиметься на інформаційній панелі у віджеті заголовка кампанії, тож напишіть кілька речень, щоб представити свій світ. Якщо це поле порожнє, замість нього будуть використані перші 1000 символів поля введення кампанії.',
        'header_image'                      => 'Зображення тла у віджеті інформаційної панелі заголовка кампанії.',
        'hide_history'                      => 'Якщо ввімкнено, доступ до історії об’єкта (журналу змін) матимуть лише члени кампанії з роллю :admin.',
        'hide_members'                      => 'Якщо ввімкнено, лише учасники кампанії з роллю :admin матимуть доступ до списку учасників кампанії.',
        'locale'                            => 'Мова, якою написана ваша кампанія. Вона використовується для створення вмісту та групування публічних кампаній.',
        'name'                              => 'Ваша кампанія/світ може мати будь-яку назву, якщо вона містить принаймні 4 літери або цифри.',
        'no_entry'                          => 'Схоже, у кампанії ще немає опису! Давайте це виправимо.',
        'permissions_tab'                   => 'Керуйте налаштуваннями конфіденційності та видимості нових елементів за замовчанням за допомогою наведених нижче параметрів.',
        'public_campaign_filters'           => 'Допоможіть іншим знайти кампанію серед інших публічних кампаній, надавши наступну інформацію.',
        'public_no_visibility'              => 'Вище носа! Кампанія загальнодоступна, але публічна роль кампанії не має жодних дозволів. :fix.',
        'related_visibility'                => 'Значення видимості за замовчанням під час створення нового елемента з цим полем (дописи, відносини, здібності тощо)',
        'system'                            => 'Якщо ваша кампанія загальнодоступна, система відображається на сторінці :link.',
        'systems'                           => 'Щоб уникнути захаращення користувачів опціями, деякі функції Kanka доступні лише з певними рольовими системами (наприклад, блок статистики монстра D&D 5e). Додавання сюди підтримуваних систем увімкне ці функції.',
        'theme'                             => 'Примусово встановити тему для кампанії, замінивши налаштування користувача.',
        'view_public'                       => 'Щоб переглянути свою кампанію як публічний глядач, відкрийте :link в анонімному вікні.',
        'visibility'                        => 'Відкриття загального доступу до кампанії означає, що її зможе побачити кожен, у кого є посилання.',
    ],
    'index'                             => [
        'actions'   => [
            'new'   => [
                'title' => 'Нова кампанія',
            ],
        ],
    ],
    'invites'                           => [
        'actions'               => [
            'copy'  => 'Копіювати посилання до буферу',
            'link'  => 'Запросити людей',
        ],
        'create'                => [
            'buttons'       => [
                'create'    => 'Згенерувати посилання',
            ],
            'success_link'  => 'Посилання створене: :link',
            'title'         => 'Запросити друзів до :campaign',
        ],
        'destroy'               => [
            'success'   => 'Запрошення видалене.',
        ],
        'error'                 => [
            'already_member'    => 'Ви вже учасник цієї кампанії.',
            'inactive_token'    => 'Цей токен уже було використано, або кампанія більше не існує.',
            'invalid_token'     => 'Цей токен втратив валідність.',
            'login'             => 'Будь ласка, увійдіть або зареєструйтеся, щоб приєднатися до кампанії.',
        ],
        'fields'                => [
            'created'   => 'Створено',
            'role'      => 'Роль',
            'token'     => 'Токен',
            'type'      => 'Тип',
            'usage'     => 'Завершується після',
        ],
        'unlimited_validity'    => 'Необмежено',
        'usages'                => [
            'five'      => '5 використань',
            'no_limit'  => 'Ніколи',
            'once'      => '1 використання',
            'ten'       => '10 використань',
        ],
    ],
    'leave'                             => [
        'confirm'           => 'Ви впевнені, що хочете вийти з кампанії :name? Ви втратите до неї доступ, хіба що адмін кампанії запросить вас знову.',
        'confirm-button'    => 'Так, вийти з кампанії',
        'error'             => 'Не вдалося вийти з кампанії.',
        'fix'               => 'Перейти до учасників кампанії',
        'no-admin-left'     => 'Вихід із кампанії неможливий, оскільки це залишить її без адміна. Спочатку додайте іншого учасника із роллю адміна.',
        'success'           => 'Ви вийшли з кампанії.',
        'title'             => 'Вихід із кампанії',
    ],
    'members'                           => [
        'actions'               => [
            'help'          => 'Допомога',
            'remove'        => 'Видалити з кампанії',
            'switch'        => 'Подивитися як користувач',
            'switch-back'   => 'Назад',
            'switch-entity' => 'Дивитися як',
        ],
        'create'                => [
            'title' => 'Додати учасників до кампанії',
        ],
        'edit'                  => [
            'title' => 'Редагувати учасника :name',
        ],
        'fields'                => [
            'banned'        => 'Користувач забанений',
            'joined'        => 'Приєднаний',
            'last_login'    => 'Останній вхід',
            'name'          => 'Користувач',
            'role'          => 'Роль',
            'roles'         => 'Ролі',
        ],
        'help'                  => 'Кампанія може мати необмежену кількість учасників.',
        'helpers'               => [
            'admin' => 'Як учасник кампанії з роллю адміна, ви можете запрошувати нових користувачів, видаляти неактивних та змінювати їхні дозволи. Для перевірки дозволів учасника, скористайтеся кнопкою :button. Більше інформації про цю функцію тут: :link.',
            'switch'=> 'Дивитися кампанію як цей користувач',
        ],
        'impersonating'         => [
            'message'   => 'Ви переглядаєте кампанію як інший користувач. Деякі функції було відключено, але решта діють точно так, як їх бачитиме користувач.',
            'title'     => 'Уособлює :name',
        ],
        'invite'                => [
            'description'   => 'Запросіть своїх друзів і гравців до кампанії, створивши посилання для запрошення та надіславши їм згенеровану URL-адресу! Коли вони приймуть запрошення, то будуть додані як учасники з роллю, вказаною в запрошенні.',
            'more'          => 'Ви можете додати більше ролей тут: :link.',
            'roles_page'    => 'Сторінка ролей',
            'title'         => 'Запрошення',
        ],
        'manage_roles'          => 'Керувати ролями користувача',
        'removal'               => 'Ви видаляєте ":member" з кампанії.',
        'roles'                 => [
            'member'    => 'Учасник',
            'owner'     => 'Адмін',
            'player'    => 'Гравець',
            'public'    => 'Публічна',
            'viewer'    => 'Глядач',
        ],
        'switch_back_success'   => 'Перемкнутися назад на свій акаунт.',
        'title'                 => 'Учасники - :name',
        'updates'               => [
            'added'     => 'Роль :role додана до :user.',
            'removed'   => 'Роль :role знята з :user.',
        ],
        'your_role'             => 'Ваша роль: <i>:role</i>',
    ],
    'modules'                           => [
        'permission-disabled'   => 'Цей модуль вимкнено.',
    ],
    'overview'                          => [
        'entity-count'      => '{0} Немає сутностей|{1} :amount сутність|[2,] :amount сутності(ей)',
        'follower-count'    => '{0} Немає підписників|{1} :count підписник|[2,] :count підписники(ів)',
    ],
    'panels'                            => [
        'boosted'   => 'Підсилення',
        'dashboard' => 'Панель інструментів',
        'permission'=> 'Дозвіл',
        'setup'     => 'Налаштування',
        'sharing'   => 'Поширення',
        'systems'   => 'Системи',
        'ui'        => 'Інтерфейс',
    ],
    'placeholders'                      => [
        'description'   => 'Короткий опис вашої кампанії',
        'locale'        => 'Код мови',
        'name'          => 'Назва вашої кампанії',
        'system'        => 'D&D, Pathfinder, Fate, DSA',
    ],
    'privacy'                           => [
        'hidden'    => 'Прихована',
        'private'   => 'Приватна',
        'visible'   => 'Видима',
    ],
    'public'                            => [
        'helpers'   => [
            'introduction'  => 'За замовчанням кампанії приватні, і їх можна зробити публічними. Це дозволяє будь-кому отримати до них доступ і робить їх доступними на сторінці :public-campaigns, якщо вони мають сутності, видимі для ролі :public-role. Публічна кампанія видима для всіх, але щоб її вміст був видимим, роль :public-role потребує відповідних дозволів.',
        ],
    ],
    'roles'                             => [
        'actions'       => [
            'add'           => 'Створити роль',
            'permissions'   => 'Керувати дозволами',
            'rename'        => 'Перейменувати роль',
            'save'          => 'Зберегти роль',
        ],
        'admin_role'    => 'роль адміна',
        'bulks'         => [
            'delete'    => '{1} Видалено роль :count.|[2,*] Видалено ролі(ей) :count.',
            'edit'      => '{1} Оновлено :count роль.|[2,*] Оновлено :count ролі(ей).',
        ],
        'create'        => [
            'success'   => 'Роль :name створено.',
            'title'     => 'Нова роль',
        ],
        'destroy'       => [
            'success'   => 'Роль :name видалено.',
        ],
        'edit'          => [
            'success'   => 'Роль :name оновлено.',
            'title'     => 'Редагувати роль :name',
        ],
        'fields'        => [
            'name'          => 'Назва',
            'permissions'   => 'Дозволи',
            'type'          => 'Тип',
            'users'         => 'Користувачі',
        ],
        'helper'        => [
            '1' => 'Кампанія поділяється на кілька ролей. Роль :admin автоматично має доступ до всього в кампанії, але кожна інша роль може мати певні дозволи на різні типи об’єктів (персонаж, розташування тощо).',
            '2' => 'Сутності можуть мати більш точні налаштування дозволів, див. вкладку «Дозволи» сутності. Ця вкладка з’являється, якщо ваша кампанія має кілька ролей або учасників.',
            '3' => 'Можна скористатися системою «відмови», де ролі отримують доступ до перегляду всіх сутностей, або використати прапорець «Приватні» для сутностей, щоб приховати їх. Або можна не надавати ролям багато дозволів, але налаштувати окему видимість для кожної сутності.',
            '4' => 'Підсилені кампанії можуть мати необмежену кількість ролей.',
        ],
        'hints'         => [
            'campaign_not_public'   => 'Загальнодоступна роль має дозволи, але кампанія є приватною. Ви можете змінити це налаштування на вкладці Спільний доступ під час редагування кампанії.',
            'empty_role'            => 'Роль ще не має учасників.',
            'role_admin'            => 'Роль :name автоматично надає її учасникам доступ до всього в кампанії.',
            'role_permissions'      => 'Увімкніть роль :name, щоб виконувати такі дії з усіма об’єктами',
        ],
        'members'       => 'Учасники',
        'modals'        => [
            'details'   => [
                'campaign'  => 'Налаштування кампанії дозволяють наступне.',
                'entities'  => 'Ось швидкий огляд, що отримують учасники з цією роллю, коли надано дозвіл.',
                'more'      => 'Для подробиць перегляньте навчальне відео на YouTube',
                'title'     => 'Опис дозволу',
            ],
        ],
        'permissions'   => [
            'actions'   => [
                'add'           => 'Створити',
                'dashboard'     => 'Панель інструментів',
                'delete'        => 'Видалити',
                'edit'          => 'Редагувати',
                'entity-note'   => 'Допис',
                'gallery'       => 'Галерея',
                'manage'        => 'Керувати',
                'members'       => 'Учасники',
                'permission'    => 'Дозволи',
                'read'          => 'Перегляд',
                'toggle'        => 'Змінити для всіх',
            ],
            'helpers'   => [
                'add'           => 'Дозволяє створювати сутності цього типу. Вони автоматично дозволяють перегляд та редагування сутностей, які вони створили, якщо вони не мають дозволу на перегляд та редагування.',
                'dashboard'     => 'Дозволяє редагувати панель інструментів та віджети панелі.',
                'delete'        => 'Дозволяє видалити всі сутності цього типу.',
                'edit'          => 'Дозволяє редагувати всі сутності цього типу.',
                'entity_note'   => 'Дозволяє додавати й редагувати дописи, навіть якщо учасник не може редагувати сутність.',
                'gallery'       => 'Дозволяє керувати галереєю суперпідсиленої кампанії.',
                'manage'        => 'Дозволяє редагувати кампанію як адмін кампанії, не дозволяючи учасниками видаляти кампанію.',
                'members'       => 'Дозволяє запрошувати нових учасників до кампанії.',
                'permission'    => 'Дозволяє встановлювати дозволи на сутності цього типу, які вони можуть редагувати.',
                'read'          => 'Дозволяє дивитися всі сутності цього типу, що не є приватними.',
            ],
        ],
        'placeholders'  => [
            'name'  => 'Назва ролі',
        ],
        'show'          => [
            'title' => 'Роль кампанії \':role\'',
        ],
        'title'         => 'Ролі - :name',
        'types'         => [
            'owner'     => 'Адмін',
            'public'    => 'Публічно',
            'standard'  => 'Стандарт',
        ],
        'users'         => [
            'actions'   => [
                'add'           => 'Додати учасника',
                'remove'        => ':user з ролі :role',
                'remove_user'   => 'Видалити учасника з ролі',
            ],
            'create'    => [
                'success'   => ':user додано до ролі :role.',
                'title'     => 'Додати учасника до ролі :name',
            ],
            'destroy'   => [
                'success'   => ':user видалений з ролі :role.',
            ],
            'errors'    => [
                'cant_kick_admins'  => 'Для уникнення зловживань неможливо видалити із кампанії інших учасників із роллю :admin. Якщо станеться помилка, повідомте нам у :discord або :email.',
                'needs_more_roles'  => 'Вам треба додати себе до іншої ролі в цій кампанії, перш ніж ви зможете видалити себе з ролі :admin.',
            ],
            'fields'    => [
                'name'  => 'Назва',
            ],
        ],
    ],
    'settings'                          => [
        'actions'       => [
            'enable'    => 'Увімкнути',
        ],
        'boosted'       => 'Ця функція у ранньому доступі й зараз доступні тільки для :boosted.',
        'deprecated'    => [
            'help'  => 'Цей модуль застарілий, що означає, його більше не підтримуються, і його помилки не тестують перед кожним оновленням. Використовуйте цей модуль, розуміючи, що одного дня його буде видалено з Kanka.',
            'title' => 'Застаріле',
        ],
        'disabled'      => 'Модуль :module вимкнено.',
        'enabled'       => 'Модуль :module увімкнено.',
        'errors'        => [
            'module-disabled'   => 'Запитаний модуль зараз вимкнено у налаштуваннях кампанії. :fix',
        ],
        'helpers'       => [
            'abilities'         => 'Створити здібності, які можуть бути уміннями, чарами чи силами, що можна присвоїти сутностям.',
            'calendars'         => 'Місце для визначення календарів вашого світу.',
            'characters'        => 'Створюйте та стежте за людьми, що населяють світ персонажами.',
            'conversations'     => 'Вигадані розмови між персонажами або між учасниками кампанії.',
            'creatures'         => 'Створюйте істот, тварин і монстрів свого світу за допомогою модуля істот.',
            'dice_rolls'        => 'Для тих, хто використовує Kanka для НРІ-кампаній, спосіб робити кидки кісток.',
            'entity_attributes' => 'Відстежуйте параметри сутностей кампанії, наприклад, ПЗ чи Швидкість.',
            'events'            => 'Свята, фестивалі, катастрофи, дні народження, війни.',
            'families'          => 'Клани чи родини, їхні взаємини та члени.',
            'inventories'       => 'Керуйте інвентарем своїх сутностей.',
            'items'             => 'Зброя, транспорт, реліквії, зілля.',
            'journals'          => 'Спостереження, записані персонажами, або підготовка до сесії ігромайстра.',
            'locations'         => 'Планети, плани, континенти, річки, країни, поселення, храми, таверни.',
            'maps'              => 'Завантажуйте карти з шарами та маркерами, що вказують на інші об’єкти кампанії.',
            'menu_links'        => 'Довільні посилання в меню бічної панелі.',
            'notes'             => 'Знання, природа, історія, магія, культури.',
            'organisations'     => 'Культи, релігії, фракції, гільдії.',
            'quests'            => 'Для відстеження різних квестів із персонажами та розташуваннями.',
            'races'             => 'Відстежуйте походження, етнічну приналежність і расові риси персонажів світу за допомогою модуля рас.',
            'tags'              => 'Кожна сутність може мати кілька тегів. Теги можуть належати до інших тегів, а записи можна фільтрувати за тегом.',
            'timelines'         => 'Представте історію свого світу за допомогою хронік.',
        ],
    ],
    'sharing'                           => [
        'filters'   => 'Публічні кампанії можна побачити на сторінці :public-campaigns. Заповнення цих полів полегшить людям пошук кампанії.',
        'language'  => 'Мова, якою написано вміст кампанії.',
        'system'    => 'У разі гри в настільні НРІ, ігрова система для цієї кампанії.',
    ],
    'show'                              => [
        'actions'   => [
            'boost' => 'Підсилити кампанію',
            'edit'  => 'Редагувати кампанію',
            'leave' => 'Залишити кампанію',
        ],
        'menus'     => [
            'configuration'     => 'Конфігурація',
            'overview'          => 'Огляд',
            'user_management'   => 'Управління користувачами',
        ],
        'tabs'      => [
            'achievements'      => 'Досягнення',
            'applications'      => 'Додатки',
            'campaign'          => 'Кампанія',
            'default-images'    => 'Прев\'ю за замовчанням',
            'export'            => 'Експорт',
            'information'       => 'Інформація',
            'members'           => 'Учасники',
            'plugins'           => 'Плагіни',
            'recovery'          => 'Відновлення',
            'roles'             => 'Ролі',
            'settings'          => 'Модулі',
            'sidebar'           => 'Налаштування бічної панелі',
            'styles'            => 'Теми',
        ],
        'title'     => 'Огляд - :name',
    ],
    'themes'                            => [
        'none'  => 'Немає (налаштування за замовчанням)',
    ],
    'ui'                                => [
        'boosted'           => 'Підсилений',
        'collapsed'         => [
            'collapsed' => 'Згорнутий',
            'default'   => 'За замовчанням',
        ],
        'connections'       => [
            'explorer'  => 'Дослідник зв\'язків (якщо доступний, для підсилених кампаній)',
            'list'      => 'Вигляд списку',
        ],
        'entity_history'    => [
            'hidden'    => 'Видимий тільки адмінам кампанії',
            'visible'   => 'Видимий для учасників',
        ],
        'fields'            => [
            'connections'       => 'Інтерфейс зв\'язків сутності за замовчанням',
            'connections_mode'  => 'Режим дослідника зв\'язків за замовчуванням',
            'entity_history'    => 'Логи сутності',
            'entity_image'      => 'Зображення сутності',
            'family_toolip'     => 'Родина персонажа',
            'member_list'       => 'Список учасників кампейну',
            'nested'            => 'Список шаблонів за замовчанням',
            'post_collapsed'    => 'Значення нового запису за замовчанням',
        ],
        'helpers'           => [
            'connections'       => 'Під час кліку на підрозділ зі зв\'язками сутності, виберіть відображений інтерфейс за замовчанням.',
            'connections_mode'  => 'Під час перегляду зв’язків сутності визначте вибраний режим за замовчуванням.',
            'entity-history'    => 'Контролює, хто може бачити недавні зміни, зроблені в окремих сутностях кампанії.',
            'member-list'       => 'Контролює, хто може бачити присутніх у кампанії.',
            'other'             => 'Інші візуальні функції для кампанії.',
            'post_collapsed'    => 'Створюючи новий запис або сутність, виберіть згорнуте поле зі значенням за замовчанням.',
            'theme'             => 'Відображає кампанію в темі користувача, або оновлює її в одній із наступних тем.',
            'tooltip'           => 'Контролює, яка інформація видима, коли наводите на назву сутності в її налаштуваннях.',
        ],
        'members'           => [
            'hidden'    => 'Видимі тільки адмінам кампанії',
            'visible'   => 'Видимі учасникам',
        ],
        'nested'            => [
            'nested'    => 'Вкладені',
            'user'      => 'За замовчанням',
        ],
        'other'             => 'Інше',
    ],
    'visibilities'                      => [
        'private'   => 'Приватна кампанія',
        'public'    => 'Публічна кампанія',
        'review'    => 'Очікують перегляду',
    ],
    'warning'                           => [
        'editing'   => [
            'description'   => 'Схоже, хтось інший редагує цю кампанію прямо зараз! Хочете повернутися чи ігнорувати це попередження з ризиком втрати даних? Учасники, що зараз редагують кампанію:',
        ],
    ],
];
