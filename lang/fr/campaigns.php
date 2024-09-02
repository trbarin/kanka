<?php

return [
    'actions'                           => [],
    'create'                            => [
        'description'           => 'Créer une nouvelle campagne',
        'helper'                => [
            'title'     => 'Bienvenue à :name',
            'welcome'   => <<<'TEXT'
Avant d'aller plus loin, tu dois choisir un nom de campagne. C'est le nom de ton monde. Si tu n'as pas encore un bon nom, pas de panique, tu peux toujours le changer plus tard ou créer plus de campagnes.

Merci d'avoir rejoint Kanka et bienvenue dans notre communauté florissante!
TEXT
,
        ],
        'success'               => 'Campagne créée.',
        'success_first_time'    => 'La première campagne a été créée! Quelques éléments ont été créés pour aider à bien démarrer.',
        'title'                 => 'Nouvelle Campagne',
    ],
    'destroy'                           => [
        'action'            => 'Supprimer la campagne',
        'confirm'           => 'Es-tu sûr de vouloir supprimer la campagne :campaign? Cette action est permanente.',
        'confirm-button'    => 'Suppression permanente de la campagne',
        'helper-v2'         => 'Cette campaign ne peut pas être supprimée tant qu\'elle a d\'autre membre. Retires les autres membres en premier et ressayes.',
        'hint'              => 'Si tu es sûr, saisis :code dans le champ suivant.',
        'success'           => 'Campagne supprimée.',
        'title'             => 'Supprimer une campagne',
    ],
    'edit'                              => [
        'success'   => 'Campagne modifiée.',
        'title'     => 'Modifier la campagne :campaign',
    ],
    'entity_note_visibility'            => [],
    'entity_personality_visibilities'   => [
        'private'   => 'Les nouveaux personnages ont leur personnalité privée par défault.',
    ],
    'entity_visibilities'               => [
        'private'   => 'Nouvelles entités privées',
    ],
    'errors'                            => [
        'access'        => 'Accès refusé pour cette campagne.',
        'premium'       => 'Cette fonctionnalité n\'est que disponible pour les campagnes Premium.',
        'unknown_id'    => 'Campagne inconnue.',
    ],
    'export'                            => [],
    'fields'                            => [
        'boosted'                           => 'Boosté par',
        'character_personality_visibility'  => 'Visibilité de la personnalité d\'un personnage par défaut',
        'connections'                       => 'Afficher le tableau de connections d\'une entité par défaut (au lieu de l\'explorateur de relation pour les campagnes boostées)',
        'css'                               => 'CSS',
        'description'                       => 'Description',
        'entity_count'                      => 'Nombre d\'entités',
        'entity_privacy'                    => 'Nouvelles entités privées par défaut',
        'entry'                             => 'Description de la campagne',
        'excerpt'                           => 'Description de la campagne sur le tableau de bord',
        'featured'                          => 'Campagne vedette',
        'followers'                         => 'Followers',
        'gallery_visibility'                => 'Visibilité par défaut des images de la galerie',
        'genre'                             => 'Genre(s)',
        'header_image'                      => 'Image de fond pour le tableau de bord',
        'image'                             => 'Image',
        'is_discreet'                       => 'Discrète',
        'locale'                            => 'Langue',
        'name'                              => 'Nom',
        'open'                              => 'Ouvert aux applications',
        'past_featured'                     => 'Campagne précédemment vedette',
        'post_collapsed'                    => 'Les nouveaux articles sur les entités sont minimisés par défaut.',
        'premium'                           => 'Premium débloqué par :name',
        'public'                            => 'Visibilité de la campagne',
        'public_campaign_filters'           => 'Filtres pour les campagnes publiques',
        'related_visibility'                => 'Visibilité des éléments liés',
        'superboosted'                      => 'Superboosté par',
        'system'                            => 'Système',
        'theme'                             => 'Thème',
        'vanity'                            => 'URL unique',
        'visibility'                        => 'Visibilité',
    ],
    'following'                         => 'Suivant',
    'helpers'                           => [
        'boosted'                           => 'Cette campagne est boostée ce qui active certaines fonctionnalités. Plus de détails sur la page :settings.',
        'character_personality_visibility'  => 'Lors de la création d\'un nouveau personnage en tant qu\'admin, sélectionner la visibilité par défaut des traits de personnalités.',
        'css'                               => 'Définir du code CSS pour la campagne qui sera chargé sur chaque page. Abuser de cette fonctionnalité peut mener à une suppression du CSS. Les abus répétés peuvent mener à une suppression de la campagne.',
        'dashboard'                         => 'Contrôler la manière dont l\'en-tête de campagne s\'affiche sur le tableau de bord.',
        'entity_count_v3'                   => 'Ce chiffre est recalculé toutes les :amount heures.',
        'entity_privacy'                    => 'Lors de la création d\'une nouvelle entité en tant qu\'admin, sélectionner la visibilité par défaut de la nouvelle entité.',
        'excerpt'                           => 'Le contenu de ce champ sera affiché sur le tableau de bord dans le widget d\'en-tête de campagne. Si ce champ est vide, les 1000 premiers caractères de la description de la campagne seront utilisés à la place.',
        'gallery_visibility'                => 'Valeur de visibilité par défaut lors de l\'ajout d\'images dans la galerie.',
        'header_image'                      => 'Image affichée en arrière-plan de l\'en-tête de campagne sur le tableau de bord.',
        'hide_history'                      => 'Activer cette option pour cacher l\'historique d\'une entité aux membres qui ne sont pas dans le groupe admin de la campagne.',
        'hide_members'                      => 'Activer cette option pour cacher la liste des membres de la campagne aux membres qui ne sont pas dans le groupe admin de celle-ci.',
        'is_discreet'                       => 'Si activé lorsque la campagne est publique, celle-ci ne sera pas affichée dans les :public-campaigns.',
        'is_discreet_locked'                => 'Les campagnes premiums peuvent être visible publiquement mais ne pas être affichées dans les :public-campaigns.',
        'locale'                            => 'La langue dans laquelle la campagne est écrite. Ceci est utilisé pour générer du contenu ainsi que pour grouper les campagnes publiques.',
        'name'                              => 'Le nom de la campagne doit contenir au minimum 4 caractères.',
        'no_entry'                          => 'La campagne n\'a pas encore de description! Corrigeons cela.',
        'permissions_tab'                   => 'Controller les visibilités par défaut de nouveaux éléments avec ces options.',
        'premium'                           => 'Certaines fonctionnalités sont disponibles parce que les fonctionnalités Premium de cette campagne sont débloquées. Pour en savoir plus, consultez la page :settings.',
        'public_campaign_filters'           => 'Aides les autres utilisateurs à trouver la campagne parmi les autres campagnes publiques en fournissant les détails suivants.',
        'public_no_visibility'              => 'Attention! La campagne est public, mais le rôle publique de la campagne n\'a pas d\'accès. :fix.',
        'related_visibility'                => 'Visibilité par défaut lors de la création d\'un nouvel élément avec ce champ (note d\'entité, relation, pouvoir, etc)',
        'system'                            => 'Si la campagne est publiquement visible, elle sera affichée dans la page :link.',
        'systems'                           => 'A définir.',
        'theme'                             => 'Définir le thème pour la campagne qui surplante le thème de l\'utilisateur.',
        'view_public'                       => 'Pour afficher la campagne comme le ferait un utilisateur public, ouvre :link dans une fenêtre de navigation privée.',
        'visibility'                        => 'Une campagne publique peut être vue par toute personne ayant un lien vers celle-ci.',
    ],
    'index'                             => [
        'actions'   => [
            'new'   => [
                'title' => 'Nouvelle Campagne',
            ],
        ],
    ],
    'invites'                           => [
        'actions'               => [
            'copy'  => 'Copier le lien dans le presse-papier.',
            'link'  => 'Nouveau Lien',
        ],
        'create'                => [
            'buttons'       => [
                'create'    => 'Créer une invitation',
            ],
            'success_link'  => 'Liens créé: :link',
            'title'         => 'Invite un ami à la campagne',
        ],
        'destroy'               => [
            'success'   => 'Invitation annulée.',
        ],
        'error'                 => [
            'already_member'    => 'Tu es déjà un membre de cette campagne.',
            'inactive_token'    => 'Ce code d\'activation a déjà été utilisé, ou la campagne n\'existe plus.',
            'invalid_token'     => 'Ce code d\'activation n\'est plus valide.',
            'join'              => 'Connecte-toi ou crée un compte pour joindre :campaign.',
            'login'             => 'Connecte-toi ou crée un compte pour joindre la campagne.',
        ],
        'fields'                => [
            'created'   => 'Envoyé',
            'role'      => 'Rôle',
            'token'     => 'Jeton',
            'type'      => 'Type',
            'usage'     => 'Nombre max d\'utilisation',
        ],
        'unlimited_validity'    => 'Illimité',
        'usages'                => [
            'five'      => '5 fois',
            'no_limit'  => 'Sans limite',
            'once'      => '1 fois',
            'ten'       => '10 fois',
        ],
    ],
    'leave'                             => [
        'confirm'           => 'Es-tu sûr de vouloir quitter la campagne :name? Tu n\'auras plus accès aux données, sauf si un admin de la campagne t\'invite à nouveau.',
        'confirm-button'    => 'Oui, quitter la campagne',
        'error'             => 'Impossible de quitter la campagne.',
        'fix'               => 'Aller aux membres de la campagne',
        'no-admin-left'     => 'Quitter la campagne n\'est pas possible car celle-ci se retrouverait sans admin. Ajoute un autre membre au rôle admin en premier.',
        'success'           => 'Tu as quitté la campagne.',
        'title'             => 'Quitter la campagne',
    ],
    'members'                           => [
        'actions'               => [
            'remove'        => 'Retirer de la campagne',
            'switch'        => 'Basculer',
            'switch-back'   => 'Retour à mon compte',
            'switch-entity' => 'Basculer',
        ],
        'create'                => [
            'title' => 'Ajouter un membre à la campagne',
        ],
        'edit'                  => [
            'title' => 'Modifier membre :name',
        ],
        'fields'                => [
            'banned'        => 'Compte suspendu',
            'joined'        => 'Rejoint',
            'last_login'    => 'Dernière connexion',
            'name'          => 'Utilisateur',
            'role'          => 'Rôle',
            'roles'         => 'Rôles',
        ],
        'helpers'               => [
            'switch'    => 'Basculer vers cet utilisateur',
        ],
        'impersonating'         => [
            'message'   => 'Tu visualises la campagne en tant qu\'un autre utilisateur. Certaines fonctionnalités ont été désactivées, mais le reste fonctionne exactement comme le verrait l\'utilisateur.',
            'title'     => 'Se faisant passer pour :name',
        ],
        'invite'                => [
            'description'   => 'Invite tes amis et joueurs à participer à la campagne en créant un lien d\'invitation et en leur envoyant l\'URL générée! En acceptant l\'invitation, ils seront ajoutés en tant que membres dans le rôle défini par l\'invitation.',
            'more'          => 'Tu peux ajouter plus de rôles sur la :link.',
            'title'         => 'Invitation',
        ],
        'manage_roles'          => 'Gérer les rôles de l\'utilisateur',
        'removal'               => 'Retrait de ":member" de la campagne.',
        'roles'                 => [
            'member'    => 'Membre',
            'owner'     => 'Administrateur',
            'player'    => 'Joueur',
            'public'    => 'Public',
            'viewer'    => 'Observateur',
        ],
        'switch_back_success'   => 'Tu es de retour à ton compte.',
        'title'                 => 'Membres - :name',
        'updates'               => [
            'added'     => ':user a été ajouté au rôle :role.',
            'removed'   => ':user a été retiré du rôle :role.',
        ],
    ],
    'modules'                           => [
        'permission-disabled'   => 'Ce module est désactivé.',
    ],
    'open_campaign'                     => [],
    'options'                           => [],
    'overview'                          => [
        'entity-count'      => '{0} Aucune entité|{1} :amount entité|[2,*] :amount entités',
        'follower-count'    => '{0} Aucun abonné|{1} :amount abonné|[2,*] :amount abonnés',
    ],
    'panels'                            => [
        'dashboard' => 'Tableau de bord',
        'permission'=> 'Permission',
        'setup'     => 'Configuration',
        'sharing'   => 'Partage',
        'systems'   => 'Systèmes',
        'ui'        => 'Interface',
    ],
    'placeholders'                      => [
        'description'   => 'Une petite description de la campagne',
        'locale'        => 'La langue utilisée',
        'name'          => 'Le nom de la campagne',
        'system'        => 'D&D 5e, 3.5, Pathfinder, Tigres Volants, Gurps',
    ],
    'privacy'                           => [
        'hidden'    => 'Caché',
        'private'   => 'Privé',
        'visible'   => 'Visible',
    ],
    'public'                            => [
        'helpers'   => [
            'introduction'  => 'Les campagnes sont privées par défaut, et peuvent être définie comme publique. Cela permet à n\'importe qui de les accéder, et rend la campagne visible dans les :public-campaigns se la campagne a des entités visibles au rôle :public-role. Une campagne public est visible par tous, mais pour que le contenu soit visible, le rôle :public-role doit avoir des permissions adéquates.',
        ],
    ],
    'roles'                             => [
        'actions'       => [
            'add'           => 'Ajouter un rôle',
            'duplicate'     => 'Copier le rôle',
            'permissions'   => 'Gérer les permissions',
            'rename'        => 'Renommer le rôle',
            'save'          => 'Enregistrer le rôle',
        ],
        'admin_role'    => 'rôle admin',
        'bulks'         => [
            'delete'    => '{1} :count rôle retiré.|[2,*] :count rôles retirés.',
            'edit'      => '{1} :count rôle modifié.|[2,*] :count rôles modifiés.',
        ],
        'create'        => [
            'success'   => 'Rôle :name créé.',
            'title'     => 'Créer un nouveau rôle pour :name',
        ],
        'destroy'       => [
            'success'   => 'Rôle :name supprimé.',
        ],
        'edit'          => [
            'success'   => 'Rôle :name modifié.',
            'title'     => 'Modifier le rôle :name',
        ],
        'fields'        => [
            'copy_permissions'  => 'Copier les permissions',
            'name'              => 'Nom',
            'permissions'       => 'Permissions',
            'type'              => 'Type',
            'users'             => 'Utilisateurs',
        ],
        'helper'        => [
            '1'                     => 'Une campagne peut avoir autant de rôles que désiré. Le rôle "Admin" a automatiquement accès à tout dans une campagne, et chaque autre rôle peut être configuré pour avoir des accès spécifiques à divers entités (personnages, lieux, etc).',
            '2'                     => 'Les entités individuelles peuvent avoir leurs propres permissions sous l\'onglet "Permissions" de celles-ci. Cet onglet apparait dès le moment qu\'une campagne a plusieurs membres ou rôles.',
            '3'                     => 'Il y a deux options possibles. Soit le mode "opt-out", ou les rôles ont le droit de lire toutes les entités, couplé à l\'option "Privé" sur les entités pour les cacher. Sinon, il est possible de ne pas donner de droits généraux aux rôles, et à la place donner des rôles individuellement sur les entités pour les rendre visibles.',
            '4'                     => 'Les campagne boostées ont un nombre illimité de rôles.',
            'permissions_helper'    => 'Créer une copie du rôle et de ses permissions, sur les modules et sur les entités.',
        ],
        'hints'         => [
            'campaign_not_public'   => 'Le rôle Public a des permissions mais la campagne est privée. La campagne peut être rendue publique sous l\'onglet Partager en modifiant la campagne.',
            'empty_role'            => 'Ce rôle n\'a pas encore de membre.',
            'role_admin'            => 'Les membres du rôle :name ont automatiquement accès à tout le contenu et toutes les fonctionnalités de la campagne.',
            'role_permissions'      => 'Permettre au rôle \':name\' les actions suivantes sur toutes les entités.',
        ],
        'members'       => 'Membres',
        'modals'        => [
            'details'   => [
                'campaign'  => 'Les permissions de campagne sont les suivants:',
                'entities'  => 'Voici un petit récapitulatif de ce que les membres de ce rôle peuvent faire quand une permission est sélectionnée.',
                'more'      => 'Pour plus d\'information, voir notre tutoriel sur Youtube',
                'title'     => 'Détails de permission',
            ],
        ],
        'permissions'   => [
            'actions'   => [
                'add'           => 'Créer',
                'dashboard'     => 'Tableau de bord',
                'delete'        => 'Supprimer',
                'edit'          => 'Modifier',
                'entity-note'   => 'Note d\'entité',
                'gallery'       => [
                    'browse'    => 'Parcourir',
                    'manage'    => 'Accès complet',
                    'upload'    => 'Ajouter',
                ],
                'manage'        => 'Gérer',
                'members'       => 'Membres',
                'permission'    => 'Gérer les permissions',
                'read'          => 'Voir',
                'toggle'        => 'Changer pour tous',
            ],
            'helpers'   => [
                'add'           => 'Permettre de créer des entités de ce type. Un membre aura automatiquement le droit de voir et modifier les entités qu\'il crée si le rôle n\'a pas le droit de voir ou de modifier les entités de ce type.',
                'dashboard'     => 'Permettre de modifier les tableaux de bords et les widgets du tableau de bord.',
                'delete'        => 'Permettre la suppression des entités de ce type.',
                'edit'          => 'Permettre la modifications des entités de ce type.',
                'entity_note'   => 'Ceci permet aux utilisateurs qui n\'ont pas la permission de modifier une entité de pouvoir ajouter des articles sur celle-ci.',
                'gallery'       => [
                    'browse'    => 'Permettre de parcourir la galerie, et définir l\'image d\'entité depuis la galerie.',
                    'manage'    => 'Permettre l\'accès complet à la galerie, avec la possibilité de modifier et supprimer des images.',
                    'upload'    => 'Permet de télécharger des images dans la galerie. L\'utilisateur ne verra que les images qu’il/elle a téléchargées si elles ne sont pas combinées avec l’autorisation de parcourir.',
                ],
                'manage'        => 'Permettre la gestion de la campagne tel qu\'un membre du rôle admin, sans permettre aux membres de supprimer la campagne.',
                'members'       => 'Permettre l\'invitation de nouveaux membre à la campagne.',
                'not_public'    => 'La campagne n\'est pas publique. Les autorisations pour le rôle public peuvent être définies, mais elles seront ignorées. Il faut modifier la campagne pour la rendre publique.',
                'permission'    => 'Permettre la gestion des permissions d\'une entités de ce type qu\'ils peuvent modifier.',
                'read'          => 'Permettre la lecture des entités de ce type qui ne sont pas privées.',
            ],
        ],
        'placeholders'  => [
            'name'  => 'Nom du rôle',
        ],
        'show'          => [
            'title' => 'Rôles de campagne',
        ],
        'title'         => 'Rôles de la campagne :name',
        'types'         => [
            'owner'     => 'Propriétaire',
            'public'    => 'Publique',
            'standard'  => 'Standard',
        ],
        'users'         => [
            'actions'   => [
                'add'           => 'Ajouter',
                'remove'        => ':user du rôle :role.',
                'remove_user'   => 'Retirer l\'utilisateur du rôle',
            ],
            'create'    => [
                'success'   => 'Utilisateur ajouté au rôle.',
                'title'     => 'Ajouter un utilisateur au rôle :name',
            ],
            'destroy'   => [
                'success'   => 'Utilisateur supprimé du rôle.',
            ],
            'errors'    => [
                'cant_kick_admins'  => 'Pour éviter des abus, il n\'est pas possible de supprimer des membres du rôle :admin de la campagne. En cas de problème, contactes-nous sur :discord ou a :email.',
                'needs_more_roles'  => 'Tu dois d\'ajouter à un autre rôle de la campagne avant de pouvoir de retirer du rôle :admin.',
            ],
            'fields'    => [
                'name'  => 'Nom',
            ],
        ],
    ],
    'settings'                          => [
        'actions'       => [
            'enable'    => 'Activer',
        ],
        'boosted'       => 'Cette fonctionnalité est actuellement en beta et seulement accessible pour les :boosted.',
        'deprecated'    => [
            'help'  => 'Ce module est obsolète, ce qui signifie qu\'il n\'est plus maintenu, et plus testé avec chaque mise-à-jour. Utilise ce module en sachant qu\'il sera éventuellement retiré de Kanka.',
            'title' => 'Obsolète',
        ],
        'disabled'      => 'Le module :module est désactivé.',
        'enabled'       => 'Le module :module est activé.',
        'errors'        => [
            'module-disabled'   => 'Le module demandé est actuellement désactivé dans la configuration de la campagne. :fix.',
        ],
        'helpers'       => [
            'abilities'         => 'Créer des pouvoirs, compétences, sorts, etc. qui peuvent être assignés aux entités.',
            'assets'            => 'Télécharger des fichiers, liens, et définir des alias pour les entités.',
            'bookmarks'         => 'Créer des favoris vers des entités ou listes filtrées qui apparaissent dans la navigation.',
            'calendars'         => 'Un endroit pour définir les calendriers du monde.',
            'characters'        => 'Créer et suivre les personnes qui peuplent le monde.',
            'conversations'     => 'Conversations fictives entre des personnages ou entre membres de la campagne.',
            'creatures'         => 'Pour les créatures, animaux, et monstre qui habitent le monde.',
            'dice_rolls'        => 'Pour ceux qui utilisent Kanka pour une campagne JdR, un système pour des jets de dés.',
            'entity_attributes' => 'Gérer les propriétés d\'entités de la campagne, tel que les points de vie ou leur vitesse.',
            'events'            => 'Jours fériés, festivals, désastres, anniversaires, guerres.',
            'families'          => 'Clans ou familles, leurs relations et leurs membres.',
            'inventories'       => 'Gérer l\'inventaires des entités de la campagne.',
            'items'             => 'Armes, véhicules, artéfacts, objets légendaires.',
            'journals'          => 'Observations écrites par des personnages, ou préparation de session pour le maître de jeu.',
            'locations'         => 'Planètes, plaines, continents, rivières, pays, temples, tavernes.',
            'maps'              => 'Ajouter des cartes et y ajouter des couches et des marqueurs pointant vers des entités de la campagne.',
            'notes'             => 'Histoires, légendes, religions, magie, races.',
            'organisations'     => 'Cultes, unités militaires, factions, guildes.',
            'quests'            => 'Gestionnaire de quêtes avec personnages et lieux.',
            'races'             => 'Si la campagne a plus d\'une race, ce module permet de facilement organiser celles-ci.',
            'tags'              => 'Chaque entité peut avoir plusieurs étiquettes. Les étiquettes peuvent appartenir à d\'autres étiquettes.',
            'timelines'         => 'Représenter l\'histoire du monde de manière visuelle avec des chronologies.',
        ],
    ],
    'sharing'                           => [
        'filters'   => 'Les campagnes publiques sont visible sur la page de :public-campaigns. Remplir les champs suivants rend la tâche plus facile pour les gens de découvrir la campagne.',
        'language'  => 'La langue dans laquelle le contenu de la campagne est écrite.',
        'system'    => 'Si la campagne est liée à un jeu de rôle, le système utilisé par la campagne.',
    ],
    'show'                              => [
        'actions'   => [
            'edit'  => 'Modifier la campagne',
            'leave' => 'Quitter la campagne',
        ],
        'menus'     => [
            'configuration'     => 'Configuration',
            'overview'          => 'Vue d\'ensemble',
            'user_management'   => 'Gestion d\'utilisateur',
        ],
        'tabs'      => [
            'achievements'      => 'Succès',
            'applications'      => 'Applications',
            'campaign'          => 'Campagne',
            'customisation'     => 'Personnalisation',
            'data'              => 'Données',
            'default-images'    => 'Images par défaut',
            'export'            => 'Export',
            'import'            => 'Import',
            'information'       => 'Information',
            'management'        => 'Gestion',
            'members'           => 'Membres',
            'modules'           => 'Modules',
            'plugins'           => 'Plugins',
            'recovery'          => 'Récupération',
            'roles'             => 'Rôles',
            'sidebar'           => 'Navigation',
            'styles'            => 'Thèmes',
            'webhooks'          => 'Webhooks',
        ],
        'title'     => 'Campagne :name',
    ],
    'superboosted'                      => [],
    'themes'                            => [
        'none'  => 'Aucun (utilise la configuration de l\'utilisateur)',
    ],
    'ui'                                => [
        'collapsed'         => [
            'collapsed' => 'Fermé',
            'default'   => 'Défaut',
        ],
        'connections'       => [
            'explorer'  => 'Explorer de relations (si disponible, pour les campagnes boostées)',
            'list'      => 'Interface de liste',
        ],
        'entity_history'    => [
            'hidden'    => 'Seulement visible aux admins de la campagne',
            'visible'   => 'Visible aux membres',
        ],
        'fields'            => [
            'connections'       => 'Interface de connection d\'une entité',
            'connections_mode'  => 'Mode par défaut d\'outil de visualisation de relation',
            'entity_history'    => 'Historique d\'une entité',
            'entity_image'      => 'Image d\'une entité',
            'member_list'       => 'Liste des membres de la campagne',
            'post_collapsed'    => 'Affichage par défaut de nouvelle entrées',
        ],
        'helpers'           => [
            'connections'       => 'Interface qui s\'affiche par défaut en cliquant sur la page connexions d\'une page.',
            'connections_mode'  => 'Modifier le mode affiché par défaut lorsque l\'outil de visualisation de relation d\'une entité est ouvert.',
            'entity-history'    => 'Contrôler qui peut voir les changements récents fait aux entités de la campagne.',
            'member-list'       => 'Contrôler qui peut voir les membres de la campagne.',
            'other'             => 'Autres options visuelles de la campagne.',
            'post_collapsed'    => 'Lors de la création d\'une nouvelle entrée sur une entité, sélection de l\'affichage par défaut.',
            'theme'             => 'Afficher la campagne dans le thème choisi par l\'utilisateur, ou forcer l\'affichage dans un des thèmes suivants.',
            'tooltip'           => 'Définir quelles options sont visibles lors du survol du nom d\'une entité.',
        ],
        'members'           => [
            'hidden'    => 'Seulement visible aux admins de la campagne',
            'visible'   => 'Visible aux membres',
        ],
        'other'             => 'Autre',
    ],
    'visibilities'                      => [
        'private'   => 'Privée',
        'public'    => 'Publique',
        'review'    => 'En attente de revue',
    ],
    'warning'                           => [],
];
