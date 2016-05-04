<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/web/docs/user/config/system.yaml',
    'modified' => 1462366531,
    'data' => [
        'home' => [
            'alias' => '/start'
        ],
        'pages' => [
            'theme' => 'learn2',
            'markdown_extra' => true,
            'process' => [
                'markdown' => true,
                'twig' => false
            ],
            'ignore_files' => [
                0 => '.DS_Store'
            ],
            'ignore_folders' => [
                0 => '.git'
            ]
        ],
        'cache' => [
            'enabled' => true,
            'check' => [
                'method' => 'file'
            ],
            'driver' => 'auto',
            'prefix' => 'g'
        ],
        'twig' => [
            'cache' => true,
            'debug' => false,
            'auto_reload' => true,
            'autoescape' => false
        ],
        'assets' => [
            'css_pipeline' => true,
            'css_minify' => true,
            'css_rewrite' => true,
            'js_pipeline' => true,
            'js_minify' => true
        ],
        'debugger' => [
            'enabled' => false,
            'twig' => true,
            'shutdown' => [
                'close_connection' => true
            ]
        ]
    ]
];
