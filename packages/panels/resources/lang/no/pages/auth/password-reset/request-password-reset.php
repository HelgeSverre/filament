<?php

return [

    'title' => 'Tilbakestill ditt passord',

    'heading' => 'Glemt passord?',

    'actions' => [

        'login' => [
            'label' => 'tilbake til logg inn',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'E-post adresse',
        ],

        'actions' => [

            'request' => [
                'label' => 'Send e-post',
            ],

        ],

    ],

    'notifications' => [

        'sent' => [
            'body' => 'Hvis kontoen ikke finnes, får du ingen e-post.',
        ],

        'throttled' => [
            'title' => 'For mange forsøk',
            'body' => 'Vennligst forsøk igjen om :seconds sekunder.',
        ],

    ],

];
