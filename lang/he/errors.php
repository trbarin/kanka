<?php

return [
    '403'       => [
        'body'  => 'נראה שאין לך הרשאה לגשת לעמוד זה!',
        'title' => 'הבקשה סורבה',
    ],
    '404'       => [
        'body'  => 'לא ניתן היה למצוא את העמוד המבוקש, עמכם הסליחה.',
        'title' => 'עמוד לא נמצא',
    ],
    '500'       => [
        'body'  => [
            '1' => 'אופס, נראה שמשהו השתבש.',
            '2' => 'השגיאה דווחה לנו, אבל ייתכן שיעזור אם נדע קצת על מה עשיתם שהוביל לשגיאה.',
        ],
        'title' => 'שגיאה',
    ],
    '503'       => [
        'body'  => [
            '1' => 'Kanka כרגע תחת תחזוקה. זה בדרך כלל אומר שיש עדכון חדש!',
            '2' => 'סליחה על אי הנוחות, הכל יחזור לשגרה תוך כמה דקות.',
        ],
        'title' => 'תחת תחזוקה',
    ],
    '503-form'  => [],
    'footer'    => 'אם אתה זקוק לעזרה נוספת, ניתן לפנות אלינו בhello@kanka.io או ב:discord.',
];