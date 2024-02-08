<?php

return [
    'actions'                           => [],
    'create'                            => [
        'description'           => 'Utwórz nową kampanię',
        'helper'                => [
            'title'     => 'Witaj w :name',
            'welcome'   => <<<'TEXT'
Zanim przejdziesz dalej, musisz nadać swojej kampanii tytuł albo nazwać jakoś powstający świat. Jeżeli nie masz jeszcze dobrego pomysłu, nie martw się! Zawsze możesz zmienić go później, albo utworzyć nową kampanię.

Dziękujemy za wybór Kanki i witamy w naszej kwitnącej społeczności!
TEXT
,
        ],
        'success'               => 'Kampania utworzona.',
        'success_first_time'    => 'Twoja kampania została utworzona! Ponieważ to twój pierwszy raz, dodaliśmy od razu kilka elementów, które pomogą ci zacząć i być może podsuną pomysły, co robić dalej.',
        'title'                 => 'Nowa kampania',
    ],
    'destroy'                           => [
        'action'            => 'Usuń kampanię',
        'confirm'           => 'Czy na pewno chcesz usunąć :campaign? Tego działania nie można będzie cofnąć',
        'confirm-button'    => 'Usuń kampanię na dobre',
        'helper-v2'         => 'Kampanii nie można usunąć, ponieważ posiada uczestników. Usuń wszystkich uczestników i spróbuj ponownie',
        'hint'              => 'W takim razie wpisz :code w oknie poniżej',
        'success'           => 'Kampania usunięta.',
        'title'             => 'Usuwanie kampanii',
    ],
    'edit'                              => [
        'success'   => 'Zmieniono kampanię.',
        'title'     => 'Edycja kampanii :name',
    ],
    'entity_note_visibility'            => [],
    'entity_personality_visibilities'   => [
        'private'   => 'Osobowość nowych postaci jest domyślnie tajna.',
    ],
    'entity_visibilities'               => [
        'private'   => 'Nowe elementy są tajne',
    ],
    'errors'                            => [
        'access'        => 'Nie masz dostępu do tej kampanii.',
        'premium'       => 'Ta opcja dostępna jest tylko w kampanii premium.',
        'unknown_id'    => 'Nieznana kampania.',
    ],
    'export'                            => [],
    'fields'                            => [
        'boosted'                           => 'Doładowanie przez',
        'character_personality_visibility'  => 'Domyślna widoczność osobowości postaci',
        'connections'                       => 'Pokazuj domyślnie tabelę powiązań tego elementu (zamiast grafu relacji w kampaniach doładowanych)',
        'css'                               => 'CSS',
        'description'                       => 'Opis',
        'entity_count'                      => 'Liczba elementów',
        'entity_privacy'                    => 'Domyślna widoczność nowych elementów',
        'entry'                             => 'Opis kampanii',
        'excerpt'                           => 'Podsumowanie',
        'featured'                          => 'Wyróżniona kampania',
        'followers'                         => 'Obserwujący',
        'genre'                             => 'Gatunek',
        'header_image'                      => 'Ilustracja okładkowa',
        'image'                             => 'Obraz',
        'locale'                            => 'Język kampanii',
        'name'                              => 'Nazwa',
        'nested'                            => 'Domyślnie pokazuj listy elementów w widoku hierarchii (jeżeli jest dostępny)',
        'open'                              => 'Otwarta na zgłoszenia',
        'past_featured'                     => 'Poprzednio wyróżniona kampania',
        'post_collapsed'                    => 'Nowe komentarze do elementów są domyślnie zwynięte.',
        'premium'                           => 'Premium odblokowana przez :name',
        'public'                            => 'Widoczność kampanii',
        'public_campaign_filters'           => 'Filtry kampanii publicznych',
        'related_visibility'                => 'Widoczność powiązanych elementów',
        'superboosted'                      => 'Turbodoładowana przez',
        'system'                            => 'System',
        'theme'                             => 'Motyw',
        'vanity'                            => 'Specjalny URL',
        'visibility'                        => 'Widoczność',
    ],
    'following'                         => 'Obserwowanie',
    'helpers'                           => [
        'boosted'                           => 'Odblokowano nowe opcje ponieważ kampania jest doładowana. Więcej informacji znajdziesz na stronie :settings.',
        'character_personality_visibility'  => 'Wybierz domyślą widoczność cech osobowości nowych postaci, tworzonych przez adminów.',
        'css'                               => 'Twórz własne style CSS do używania w kampanii. Uwaga - nadużywanie tej opcji może poskutkować usunięciem stworzonych stylów. Powtarzające się albo poważne wykroczenia mogą spowodować usunięcie kampanii.',
        'dashboard'                         => 'Dostosuj sposób wyświetlania widżetów na pulpicie kampanii wypełniając poniższe pola',
        'entity_count_v3'                   => 'Wartość aktualizowana co :amount godzin.',
        'entity_privacy'                    => 'Wybierz domyślą dostępność nowych elementów, tworzonych przez adminów.',
        'excerpt'                           => 'Podsumowanie kampanii będzie wyświetlane na pulpicie, więc poświęć mu kilka zdań. Najlepiej, gdy jest krótkie i dobitne.',
        'header_image'                      => 'Obraz wyświetlany w tle nagłówka pulpitu kampanii',
        'hide_history'                      => 'Zaznacz, by ukryć historię edycji elementów kampanii przed nieposiadającymi statusu administratora.',
        'hide_members'                      => 'Zaznacz, by ukryć listę uczestników kampanii przed nieposiadającymi statusu administratora.',
        'locale'                            => 'Język, w którym piszesz kampanię. Służy do tworzenia zawartości oraz filtrowania kampanii publicznych.',
        'name'                              => 'Twoja kampania lub świat mogą się nazywać jakkolwiek, o ile nazwa ma przynamniej 4 litery lub cyfry.',
        'no_entry'                          => 'Ta kampania nie ma chyba żadnego opisu! Pora to naprawić.',
        'permissions_tab'                   => 'Poniższe opcje pozwalają kontrolować widoczność i dostępność nowych elementów.',
        'premium'                           => 'Część opcji jest dostępna, ponieważ odblokowano funkcje premium. Więcej informacji na stronie :settings.',
        'public_campaign_filters'           => 'Pomóż innym graczom znaleźć twoją kampanię wśród innych dostępnych publicznie, podając następujące informacje.',
        'public_no_visibility'              => 'Uwaga! Ta kampania jest publiczna, ale nie rola "publiczność" na razie niczego nie widzi. :fix',
        'related_visibility'                => 'Domyślna widoczność nowych elementów powiązanych z innym elementem (notek, relacji, zdolności itd.)',
        'system'                            => 'Jeżeli kampania jest dostępna publicznie, system podany jest na stronie :link.',
        'systems'                           => 'By nie zarzucać wszystkich użytkowników mnóstwem opcji, Kanka udostępnia niektóre możliwości tylko dla konkretnych systemów RPG (np. blok statystyk potworów do D&D 5 ed.). Jeżeli dodasz tu wspierany w ten sposób system, uzyskasz dostęp do takich treści.',
        'theme'                             => 'Ustaw inny motyw tej kampanii, niż zaznaczony w ogólnych preferencjach użytkownika.',
        'view_public'                       => 'By zobaczyć kampanię tak, jak obserwujący otwórz :link w trybie incognito.',
        'visibility'                        => 'Jeżeli kampania jest publiczna, każda osoba posiadająca odnośnik będzie mogła ją zobaczyć.',
    ],
    'index'                             => [
        'actions'   => [
            'new'   => [
                'title' => 'Nowa kampania',
            ],
        ],
    ],
    'invites'                           => [
        'actions'               => [
            'copy'  => 'Skopiuj odnośnik do schowka',
            'link'  => 'Nowy odnośnik',
        ],
        'create'                => [
            'buttons'       => [
                'create'    => 'Stwórz zaproszenie',
            ],
            'success_link'  => 'Stworzono odnośnik :link',
            'title'         => 'Zaproś kogoś do udziału w kampanii',
        ],
        'destroy'               => [
            'success'   => 'Usunięto zaproszenie.',
        ],
        'error'                 => [
            'already_member'    => 'Bierzesz już udział w tej kampanii.',
            'inactive_token'    => 'Ta przepustka jest już wykorzystana albo kampania została usunięta.',
            'invalid_token'     => 'Przepustka jest nieważna.',
            'login'             => 'Zaloguj się lub zarejestruj, by dołączyć do kampanii.',
        ],
        'fields'                => [
            'created'   => 'Wysłano',
            'role'      => 'Rola',
            'token'     => 'Kod',
            'type'      => 'Rodzaj',
            'usage'     => 'Maksymalna liczba użyć',
        ],
        'unlimited_validity'    => 'Nieograniczona',
        'usages'                => [
            'five'      => '5 użyć',
            'no_limit'  => 'Bez limitu',
            'once'      => '1 użycie',
            'ten'       => '10 użyć',
        ],
    ],
    'leave'                             => [
        'confirm'           => 'Czy na pewno chcesz opuścić kampanię :name? Utracisz do niej dostęp do czasu, gdy administrator kampanii zaprosi cię ponownie.',
        'confirm-button'    => 'Tak, opuść kampanię',
        'error'             => 'Nie możesz opuścić kampanii.',
        'fix'               => 'Przejdź do uczestników kampanii',
        'no-admin-left'     => 'Nie możesz opuścić kampanii, ponieważ pozostanie wówczas bez administratorów. Nadaj najpierw innemu uczestnikowi rolę administratora',
        'success'           => 'Opuszczasz kampanię.',
        'title'             => 'Opuszczanie kampanii',
    ],
    'members'                           => [
        'actions'               => [
            'remove'        => 'Usuń z kampanii',
            'switch'        => 'Przełącz',
            'switch-back'   => 'Powrót do profilu',
            'switch-entity' => 'Zobacz jako',
        ],
        'create'                => [
            'title' => 'Dodaj uczestnika kampanii',
        ],
        'edit'                  => [
            'title' => 'Edytuj uczestnika :name',
        ],
        'fields'                => [
            'banned'        => 'Użytkownik zablokowany',
            'joined'        => 'Dołączył(a)',
            'last_login'    => 'Ostatnie logowanie',
            'name'          => 'Użytkownik',
            'role'          => 'Rola',
            'roles'         => 'Role',
        ],
        'helpers'               => [
            'switch'    => 'Przełącz uczestnika',
        ],
        'impersonating'         => [
            'message'   => 'Oglądasz kampanię z perspektywy innego uczestnika. Niektóre funkcje mogą nie działać, ale reszta wygląda dokładnie tak, jak widzi ją ta osoba. By wrócić do własnego profilu użyj opcji Powrót do profilu, znajdującej się w miejscu opcji Wyloguj.',
            'title'     => 'Zalogowano jako :name',
        ],
        'invite'                => [
            'description'   => 'Możesz włączać znajomych do udziału w kampanii przekazując im odnośnik z zaproszeniem. Po zaakceptowaniu, zostaną oni dodani do kampanii w przydzielonej roli. Możesz też zapraszać graczy mailem.',
            'more'          => 'Możesz dodawać nowe role tutaj: :link.',
            'roles_page'    => 'lista ról',
            'title'         => 'Zaproszenia',
        ],
        'manage_roles'          => 'Zarządzaj rolami uczestników',
        'removal'               => 'Usuwasz ":member" z kampanii.',
        'roles'                 => [
            'member'    => 'Uczestnik',
            'owner'     => 'Administrator',
            'player'    => 'Gracz',
            'public'    => 'Publiczność',
            'viewer'    => 'Obserwator',
        ],
        'switch_back_success'   => 'Powrócono do podstawowego profilu.',
        'title'                 => 'Uczestnicy kampanii :name',
        'updates'               => [
            'added'     => 'Uczestnikowi :user przyznano rolę :role.',
            'removed'   => 'Uczestnikowi :user odebrano rolę :role.',
        ],
    ],
    'modules'                           => [
        'permission-disabled'   => 'Moduł jest wyłączony.',
    ],
    'open_campaign'                     => [],
    'options'                           => [],
    'overview'                          => [
        'entity-count'      => '{0} Brak elementów|{1} :amount element|[2,3,4] :amount elementy|[5,] :amount elementów',
        'follower-count'    => '{0} Brak śledzących|{1} :amount śledzący|[2,] :amount śledzących',
    ],
    'panels'                            => [
        'dashboard' => 'Pulpit',
        'permission'=> 'Uprawnienia',
        'setup'     => 'Konfiguracja',
        'sharing'   => 'Udostępnianie',
        'systems'   => 'System',
        'ui'        => 'Wygląd',
    ],
    'placeholders'                      => [
        'description'   => 'Krótkie podsumowanie kampanii',
        'locale'        => 'Język kampanii',
        'name'          => 'Tytuł tej kampanii',
        'system'        => 'D&D, Pathfinder, Fate, DSA',
    ],
    'privacy'                           => [
        'hidden'    => 'Ukryta',
        'private'   => 'Prywatna',
        'visible'   => 'Widoczna',
    ],
    'public'                            => [
        'helpers'   => [
            'introduction'  => 'Kampanie są domyślnie prywatne, ale można je upublicznić. Wówczas każdy zyska do nich dostęp za pomocą strony :public-campaigns, o ile w kampanii są jakieś elementy widoczne dla posiadaczy roli :public-role. A więc: wszyscy widzą publiczne kampanie, ale by mogli przeglądać ich elementy trzeba odpowiednio ustawić uprawnienia dla roli :public-role.',
        ],
    ],
    'roles'                             => [
        'actions'       => [
            'add'           => 'Dodaj rolę',
            'duplicate'     => 'Powiel rolę',
            'permissions'   => 'Zarządzaj uprawnieniami',
            'rename'        => 'Zmień nazwę',
            'save'          => 'Zapisz rolę',
        ],
        'admin_role'    => 'administrator',
        'bulks'         => [
            'delete'    => '{1} Usunięto :count rolę.|[2,3,4] Usunięto :count role.|[5,*] Usunięto :count ról.',
            'edit'      => '{1} Zmieniono :count rolę.|[2,3,4] Zmieniono :count role.|[5,*] Zmieniono :count ról.',
        ],
        'create'        => [
            'success'   => 'Stworzono rolę.',
            'title'     => 'Stwórz nową rolę dla :name',
        ],
        'destroy'       => [
            'success'   => 'Usunięto rolę.',
        ],
        'edit'          => [
            'success'   => 'Zaktualizowano rolę.',
            'title'     => 'Edycja roli :name',
        ],
        'fields'        => [
            'copy_permissions'  => 'Kopiuj uprawnienia',
            'name'              => 'Nazwa',
            'permissions'       => 'Uprawnienia',
            'type'              => 'Rodzaj',
            'users'             => 'Posiadacze',
        ],
        'helper'        => [
            '1'                     => 'Kampania może posiadać dowodnie dużo ról. "Administrator" posiada automatycznie dostęp do wszystkich elementów kampanii, ale inne role mogą być ograniczone tylko do części elementów (postaci, miejsc, itd.).',
            '2'                     => 'Uprawnienia rozmaitych elementów można dodatkowo modyfikować w zakładce "Uprawnienia". Pojawi się ona, kiedy w kampanii przybędzie ról lub członków.',
            '3'                     => 'Ustawieniami można zarządzać globalnie, zapewniając rolom uprawienia dostępu do całych kategorii elementów kampanii i ukrywając część z nich za pomocą opcji "Tajne", albo lokalnie, włączając ręcznie widoczność konkretnych elementów.',
            '4'                     => 'Liczba ról w kampaniach doładowanych nie jest ograniczona.',
            'permissions_helper'    => 'Powiela wszystkie uprawnienia roli dotyczące modułów i elementów kampanii.',
        ],
        'hints'         => [
            'campaign_not_public'   => 'Ustawiono uprawnienia roli Publiczność, ale kampania jest prywatna. Możesz to zmienić z pomocą zakładki Udostępnij w menu edycji kampanii.',
            'empty_role'            => 'Tej roli nie posiada żaden z uczestników kampanii.',
            'role_admin'            => 'Rola :admin zapewnia posiadaczom automatyczny dostęp do wszystkiego w kampanii.',
            'role_permissions'      => 'Zezwól roli :name na następujące działania na elementach',
        ],
        'members'       => 'Uczestnicy',
        'modals'        => [
            'details'   => [
                'campaign'  => 'Uprawnienia w kampanii umożliwiają, co następuje.',
                'entities'  => 'Oto krótkie zestawienie uprawnień, które mogą otrzymać użytkownicy w danej roli.',
                'more'      => 'Dalsze instrukcje znajdziesz w filmie instruktażowym na YouTube',
                'title'     => 'Szczegóły uprawnień',
            ],
        ],
        'permissions'   => [
            'actions'   => [
                'add'           => 'Tworzenie',
                'dashboard'     => 'Pulpit',
                'delete'        => 'Usuwanie',
                'edit'          => 'Edytowanie',
                'entity-note'   => 'Komentowanie',
                'gallery'       => [
                    'browse'    => 'Przeglądanie',
                    'manage'    => 'Pełna kontrola',
                    'upload'    => 'Dodawanie',
                ],
                'manage'        => 'Zarządzaj',
                'members'       => 'Uczestnicy',
                'permission'    => 'Uprawnienia',
                'read'          => 'Oglądanie',
                'toggle'        => 'Zmień dla wszystkich',
            ],
            'helpers'   => [
                'add'           => 'Pozwala tworzyć elementy danego rodzaju. Automatycznie umożliwia również oglądanie i edycję stworzonych elementów, nawet jeżeli rola nie posiada do tego uprawnień.',
                'dashboard'     => 'Pozwala edytować pulpity i ich widżety.',
                'delete'        => 'Pozwala usuwać elementy danego rodzaju.',
                'edit'          => 'Pozwala modyfikować elementy danego rodzaju.',
                'entity_note'   => 'Pozwala uczestnikom nie posiadającym praw edycji dodawać komentarze do elementów kampanii.',
                'gallery'       => [
                    'browse'    => 'Pozwala przeglądać galerię i dodawać znajdujące się w niej orazy do elementów.',
                    'manage'    => 'Pozwala wykonywać wszystkie działania w galerii, w tym edytować i usuwać obrazy.',
                    'upload'    => 'Pozwala dodawać obrazy do galerii. Jeżeli uczestnik nie posiada też uprawnień do przeglądania, będzie widzieć tylko obrazy dodane samodzielnie.',
                ],
                'manage'        => 'Pozwala edytować kampanię jakby uczestnik był administratorem, ale nie daje uprawnień by ją usunąć.',
                'members'       => 'Pozwala zapraszać nowych uczestników kampanii.',
                'permission'    => 'Pozwala zarządzać uprawnieniami tych elementów danego typu, które uczestnik może też edytować.',
                'read'          => 'Pozwala widzieć wszystkie elementy danego typu, które nie są tajne.',
            ],
        ],
        'placeholders'  => [
            'name'  => 'Nazwa roli',
        ],
        'show'          => [
            'title' => 'Rola w kampanii ":role"',
        ],
        'title'         => 'Role w kampanii :name',
        'types'         => [
            'owner'     => 'Administrator',
            'public'    => 'Publiczność',
            'standard'  => 'Stadardowy',
        ],
        'users'         => [
            'actions'   => [
                'add'           => 'Dodaj uczestnika',
                'remove'        => ':user z roli :role',
                'remove_user'   => 'Uusń rolę użytkownika',
            ],
            'create'    => [
                'success'   => 'Uczestnikowi przypisano rolę.',
                'title'     => 'Przypisz uczestnikowi rolę :name',
            ],
            'destroy'   => [
                'success'   => 'Uczestnikowi odebrano rolę.',
            ],
            'errors'    => [
                'cant_kick_admins'  => 'By uniknąć nadużyć, nie można usunąć roli :admin posiadanej przez innego użytkownika. W wypadku nadużyć prosimy o kontakt przez :discord albo :email.',
                'needs_more_roles'  => 'Zanim zrezygnujesz z roli :admin musisz nadać sobie jakąś inną rolę w kampanii.',
            ],
            'fields'    => [
                'name'  => 'Nazwa',
            ],
        ],
    ],
    'settings'                          => [
        'actions'       => [
            'enable'    => 'Aktywny',
        ],
        'boosted'       => 'Opcja we wczesnym dostępie, na razie dostępna wyłącznie w :boosted.',
        'deprecated'    => [
            'help'  => 'Ten moduł jest przestarzały - to znaczy, że ani go nie rozwijamy, ani nie sprawdzamy pod kątem błędów po aktualizacjach. Możesz go używać, ale ze świadomością, że ostatecznie zostanie z Kanki usunięty',
            'title' => 'Przestarzałe',
        ],
        'disabled'      => 'Moduł :module został wyłączony.',
        'enabled'       => 'Moduł :module został aktywowany.',
        'errors'        => [
            'module-disabled'   => 'Ten moduł jest obecnie wyłączony w ustawieniach kampanii. :fix',
        ],
        'helpers'       => [
            'abilities'         => 'Twórz zdolności specjalne, na przykład czary, moce czy techniki, i przypisuj je innym elementom.',
            'bookmarks'         => 'Tworzy w menu bocznym zakładki elementów i filtrowanych list',
            'calendars'         => 'Wyposaż swój świat w systemy liczenia czasu.',
            'characters'        => 'Mieszkańcy tego świata.',
            'conversations'     => 'Rozmowy które odbywają fikcyjne postaci albo prawdziwi uczestnicy kampanii. Ten moduł bywa niedoceniany.',
            'creatures'         => 'Moduł istot pozwala tworzyć zwierzęta, potwory i rozmaite inne stworzenia.',
            'dice_rolls'        => 'Jeżeli używasz Kanki do prowadzenia kampanii, tu możesz zarządzać wykonywaniem rzutów kośćmi. Ten moduł bywa niedoceniany.',
            'entity_attributes' => 'Wyświetla cechy elementów kampanii, na przykład Punkty Życia albo Szybkość.',
            'events'            => 'Święta, festyny, katastrofy, urodziny i wojny.',
            'families'          => 'Klany lub rodziny, ich członkowie i wzajemne relacje.',
            'inventories'       => 'Zarządzaj wyposażeniem elementów.',
            'items'             => 'Uzbrojenie, pojazdy, artefakty, eliksiry.',
            'journals'          => 'Rozmaite spostrzeżenia spisane przez postaci oraz notatki MG.',
            'locations'         => 'Planety, wymiary, kontynenty, państwa, miasta, rzeki, świątynie, gospody.',
            'maps'              => 'Dodaj do kampanii mapę i oznacz położenie innych elementów z pomocą warstw i znaczników.',
            'notes'             => 'Tajemnice, religie, historia, magia, rasy.',
            'organisations'     => 'Kulty, oddziały wojskowe, frakcje polityczne, gildie.',
            'quests'            => 'Zadania, które realizuje drużyna, z opisem zaangażowanych miejsc i postaci.',
            'races'             => 'Jeżeli świecie żyje wiele ras, możesz opisać je tutaj.',
            'tags'              => 'Każdy element można oznaczyć z pomocą rozmaitych etykiet ułatwiających wyszukiwanie. Nawet etykiety mogą mieć własne etykiety.',
            'timelines'         => 'Dzieje świata wedle rozmaitych historii.',
        ],
    ],
    'sharing'                           => [
        'filters'   => 'Kampanie publiczne widoczne są na stronie :public-campaigns. Wypełniając poniższe pola pomagasz znaleźć tam twoją kampanię!',
        'language'  => 'Język, w którym napisano treść kampanii.',
        'system'    => 'Jeżeli gracie w grę RPG, tu wpisz system którego używacie.',
    ],
    'show'                              => [
        'actions'   => [
            'edit'  => 'Edytuj kampanię',
            'leave' => 'Opuść kampanię',
        ],
        'menus'     => [
            'configuration'     => 'Konfiguracja',
            'overview'          => 'Ogólne',
            'user_management'   => 'Użytkownicy',
        ],
        'tabs'      => [
            'achievements'      => 'Osiągnięcia',
            'applications'      => 'Zgłoszenia',
            'campaign'          => 'Kampania',
            'customisation'     => 'Dostosowanie',
            'data'              => 'Dane',
            'default-images'    => 'Domyślne ikony',
            'export'            => 'Eksport',
            'import'            => 'Import',
            'information'       => 'Informacja',
            'management'        => 'Zarządzanie',
            'members'           => 'Uczestnicy',
            'modules'           => 'Moduły',
            'plugins'           => 'Dodatki',
            'recovery'          => 'Odzyskiwanie',
            'roles'             => 'Role',
            'sidebar'           => 'Ustawienia menu bocznego',
            'styles'            => 'Motywy',
        ],
        'title'     => 'Kampania :name',
    ],
    'superboosted'                      => [],
    'themes'                            => [
        'none'  => 'Brak (powrót do ustawień użytkownika)',
    ],
    'ui'                                => [
        'collapsed'         => [
            'collapsed' => 'Zwinięte',
            'default'   => 'Domyślne',
        ],
        'connections'       => [
            'explorer'  => 'Wizualizacja powiązań (tylko w doładowanych kampaniach)',
            'list'      => 'Tabela powiązań',
        ],
        'entity_history'    => [
            'hidden'    => 'Widoczna tylko dla adminów',
            'visible'   => 'Widoczna dla uczestników',
        ],
        'fields'            => [
            'connections'       => 'Domyślny interfejs powiązań elementu',
            'connections_mode'  => 'Domyślny tryb wyświetlania relacji',
            'entity_history'    => 'Historia edycji elementu',
            'entity_image'      => 'Ilustracja elementu',
            'member_list'       => 'Lista uczestników kampanii',
            'nested'            => 'Domyślny układ list',
            'post_collapsed'    => 'Domyślny sposób prezentowana komentarzy',
        ],
        'helpers'           => [
            'connections'       => 'Wybierz domyślny sposób wyświetlania powiązań po wejściu na odpowiednią podstronę elementu.',
            'connections_mode'  => 'Określ domyślny sposób wyświetlania relacji elementu z innymi.',
            'entity-history'    => 'Kontroluje, kto może zobaczyć ostatnie zmiany w konkretnych elementach kampanii.',
            'member-list'       => 'Kontroluje kto może zobaczyć uczestników kampanii.',
            'other'             => 'Inne opcje wizualne kampanii',
            'post_collapsed'    => 'Wybierz sposób wyświetlania nowych komentarzy do elementów.',
            'theme'             => 'Wyświetla kampanię używając motywu użytkownika, albo wymusza wyświetlenie w jednym z poniższych motywów.',
            'tooltip'           => 'Wybierz informacje widoczne po najechaniu kursorem na nazwę elementu na liście',
        ],
        'members'           => [
            'hidden'    => 'Widoczne tylko dla adminów kampanii',
            'visible'   => 'Widoczne dla wszystkich uczestników',
        ],
        'nested'            => [
            'nested'    => 'Widok hierarchii',
            'user'      => 'Domyśle ustawienie użytkownika',
        ],
        'other'             => 'Inne',
    ],
    'visibilities'                      => [
        'private'   => 'Prywatna',
        'public'    => 'Publiczna',
        'review'    => 'Oczekuje na recenzję',
    ],
    'warning'                           => [],
];
