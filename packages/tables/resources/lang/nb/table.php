<?php

return [

    'columns' => [

        'tags' => [
            'more' => 'og :count flere',
        ],

        'messages' => [
            'copied' => 'Kopieret',
        ],

    ],

    'fields' => [

        'bulk_select_page' => [
            'label' => 'Velg/opphev markering for alle elementer for massehandlinger',
        ],

        'bulk_select_record' => [
            'label' => 'Velg/opphev markering av :key for massehandlinger',
        ],


        'search_query' => [
            'label' => 'Søk',
            'placeholder' => 'Søk',
        ],
    ],


    'pagination' => [

        'label' => 'Paginering Navigation',

        'overview' => 'Viser :first til :last av :total resultater',

        'fields' => [

            'records_per_page' => [

                'label' => 'per side',

                'options' => [
                    'all' => 'Alle',
                ],

            ],

        ],

        'buttons' => [

            'go_to_page' => [
                'label' => 'Gå til side :page',
            ],

            'next' => [
                'label' => 'Neste',
            ],

            'previous' => [
                'label' => 'Forrige',
            ],

        ],

    ],


    'buttons' => [
        'disable_reordering' => [
            'label' => 'Fullfør endring av rekkefølge på elementer',
        ],

        'enable_reordering' => [
            'label' => 'Endre rekkefølge på elementene',
        ],

        'toggle_columns' => [
            'label' => 'Slå av/på koloneer',
        ],

        'filter' => [
            'label' => 'Filtrer',
        ],

        'open_actions' => [
            'label' => 'Åpne handlinger',
        ],

    ],

    'filters' => [

        'buttons' => [

            'remove' => [
                'label' => 'Fjern filter',
            ],

            'remove_all' => [
                'label' => 'Fjern all filtrene',
                'tooltip' => 'Fjern all filtrene',
            ],

            'reset' => [
                'label' => 'Tilbakestill filter',
            ],

        ],

        'indicator' => 'Aktive filter',

        'multi_select' => [
            'placeholder' => 'Alle',
        ],

        'select' => [
            'placeholder' => 'Alle',
        ],

        'trashed' => [

            'label' => 'Slettede elementer',

            'only_trashed' => 'Bare slettede elementer',

            'with_trashed' => 'Med slettede elementer',

            'without_trashed' => 'Uten slettede elementer',

        ],

    ],

    'empty' => [
        'heading' => 'Ingen resultater',
    ],

    'reorder_indicator' => 'Dra og slipp elementene i rekkefølge.',


    'selection_indicator' => [
        'selected_count' => 'ett element valgt.|:count elementer valgt.',

        'buttons' => [

            'select_all' => [
                'label' => 'Velg alle :count',
            ],

            'deselect_all' => [
                'label' => 'Opphev valgte',
            ],

        ],

    ],

    'sorting' => [

        'fields' => [

            'column' => [
                'label' => 'Sorter etter',
            ],

            'direction' => [

                'label' => 'Sorteringsretning',

                'options' => [
                    'asc' => 'Stigende',
                    'desc' => 'Synkende',
                ],

            ],

        ],

    ],

];
