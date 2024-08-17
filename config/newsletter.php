<?php

return [

    'driver' => \Spatie\Newsletter\Drivers\MailChimpDriver::class,

    'apiKey' => '0824261f5019d89d2ef48dc5e9afec07-us8',
    'default_list_name' => 'Kitabbhandaar',

    'lists' => [
        'Kitabbhandaar' => [
            'id' => env('MAILCHIMP_LIST_ID'),
        ],
    ],

    'ssl' => true,

];