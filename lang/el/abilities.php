<?php

return [
    'abilities'     => [
        'title' => 'Απόγονες ικανότητες του :name',
    ],
    'create'        => [
        'title' => 'Νέα Ικανότητα',
    ],
    'destroy'       => [],
    'edit'          => [],
    'fields'        => [
        'abilities' => 'Ικανότητα',
        'ability'   => 'Γονική Ικανότητα',
        'charges'   => 'Αριθμός χρήσης',
        'name'      => 'Ονομα',
        'type'      => 'Τύπος',
    ],
    'helpers'       => [
        'descendants'   => 'Αυτή η λίστα περιέχει όλες τις ικανότητες που είναι απόγονοι αυτής της ικανότητας και όχι μόνο αυτές που βρίσκονται ακριβώς κάτω από αυτήν.',
    ],
    'index'         => [
        'title' => 'Ικανότητες',
    ],
    'placeholders'  => [
        'charges'   => 'Πόσες φορές μπορώ να το κάνω αυτό. Δείτε τα χαρακτηριστικά με {Level}*{CHA}',
        'name'      => 'Μπάλα φωτιάς, Παρατηρητής, Πονηρή επίθεση',
        'type'      => 'Ξόρκια, Δυνάμεις, Επιθέσεις',
    ],
    'show'          => [
        'tabs'  => [
            'abilities' => 'Ικανότητες',
        ],
    ],
];