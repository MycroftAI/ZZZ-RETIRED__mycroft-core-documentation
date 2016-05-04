<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/web/docs/system/config/system.yaml',
    'modified' => 1461762502,
    'data' => [
        'absolute_urls' => false,
        'timezone' => '',
        'default_locale' => NULL,
        'param_sep' => ':',
        'wrapped_site' => false,
        'reverse_proxy_setup' => false,
        'proxy_url' => NULL,
        'languages' => [
            'supported' => [
                
            ],
            'include_default_lang' => true,
            'translations' => true,
            'translations_fallback' => true,
            'session_store_active' => false,
            'http_accept_language' => false,
            'override_locale' => false
        ],
        'home' => [
            'alias' => '/home',
            'hide_in_urls' => false
        ],
        'pages' => [
            'theme' => 'antimatter',
            'order' => [
                'by' => 'default',
                'dir' => 'asc'
            ],
            'list' => [
                'count' => 20
            ],
            'dateformat' => [
                'default' => NULL,
                'short' => 'jS M Y',
                'long' => 'F jS \\a\\t g:ia'
            ],
            'publish_dates' => true,
            'process' => [
                'markdown' => true,
                'twig' => false
            ],
            'twig_first' => false,
            'events' => [
                'page' => true,
                'twig' => true
            ],
            'markdown' => [
                'extra' => false,
                'auto_line_breaks' => false,
                'auto_url_links' => false,
                'escape_markup' => false,
                'special_chars' => [
                    '>' => 'gt',
                    '<' => 'lt'
                ]
            ],
            'types' => [
                0 => 'txt',
                1 => 'xml',
                2 => 'html',
                3 => 'htm',
                4 => 'json',
                5 => 'rss',
                6 => 'atom'
            ],
            'append_url_extension' => '',
            'expires' => 604800,
            'last_modified' => false,
            'etag' => false,
            'vary_accept_encoding' => false,
            'redirect_default_route' => false,
            'redirect_default_code' => 301,
            'redirect_trailing_slash' => true,
            'ignore_files' => [
                0 => '.DS_Store'
            ],
            'ignore_folders' => [
                0 => '.git',
                1 => '.idea'
            ],
            'ignore_hidden' => true,
            'url_taxonomy_filters' => true
        ],
        'cache' => [
            'enabled' => true,
            'check' => [
                'method' => 'file'
            ],
            'driver' => 'auto',
            'prefix' => 'g',
            'lifetime' => 604800,
            'gzip' => false
        ],
        'twig' => [
            'cache' => true,
            'debug' => false,
            'auto_reload' => true,
            'autoescape' => false,
            'undefined_functions' => true,
            'undefined_filters' => true,
            'umask_fix' => false
        ],
        'assets' => [
            'css_pipeline' => false,
            'css_minify' => true,
            'css_minify_windows' => false,
            'css_rewrite' => true,
            'js_pipeline' => false,
            'js_minify' => true,
            'enable_asset_timestamp' => false,
            'collections' => [
                'jquery' => 'system://assets/jquery/jquery-2.x.min.js'
            ]
        ],
        'errors' => [
            'display' => false,
            'log' => true
        ],
        'debugger' => [
            'enabled' => false,
            'shutdown' => [
                'close_connection' => true
            ]
        ],
        'images' => [
            'default_image_quality' => 85,
            'cache_all' => false,
            'cache_perms' => '0755',
            'debug' => false
        ],
        'media' => [
            'enable_media_timestamp' => false,
            'upload_limit' => 0,
            'unsupported_inline_types' => [
                
            ],
            'allowed_fallback_types' => [
                
            ]
        ],
        'session' => [
            'enabled' => true,
            'timeout' => 1800,
            'name' => 'grav-site',
            'secure' => false,
            'httponly' => true
        ]
    ]
];
