<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/web/docs/system/config/site.yaml',
    'modified' => 1462364176,
    'data' => [
        'title' => 'Core Mycroft',
        'author' => [
            'name' => 'Alejandro Seoane',
            'email' => 'alejandro.seoane@mycroft.ai'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'docs'
        ],
        'metadata' => [
            'description' => 'My Grav Site'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => NULL,
        'routes' => NULL,
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
