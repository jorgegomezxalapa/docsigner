<?php
/**
 * docsigner package config file
 */

return [
    'providers' => [
        EdgarOrozco\Docsigner\Providers\DocsignerServiceProvider::class,
    ],

    'aliases' => [
        'Docsigner' => EdgarOrozco\Docsigner\Facades\Docsigner::class,
    ],
];
