<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledConfig',
    'timestamp' => 1462366541,
    'checksum' => 'e1d7c3b70dc74dd47c25b97d0f927371',
    'files' => [
        'user/config' => [
            'plugins/anchors' => [
                'file' => 'user/config/plugins/anchors.yaml',
                'modified' => 1461762502
            ],
            'plugins/highlight' => [
                'file' => 'user/config/plugins/highlight.yaml',
                'modified' => 1462364612
            ],
            'plugins/simplesearch' => [
                'file' => 'user/config/plugins/simplesearch.yaml',
                'modified' => 1461762502
            ],
            'security' => [
                'file' => 'user/config/security.yaml',
                'modified' => 1462357285
            ],
            'site' => [
                'file' => 'user/config/site.yaml',
                'modified' => 1462359006
            ],
            'system' => [
                'file' => 'user/config/system.yaml',
                'modified' => 1462366531
            ]
        ],
        'system/config' => [
            'media' => [
                'file' => 'system/config/media.yaml',
                'modified' => 1461762502
            ],
            'site' => [
                'file' => 'system/config/site.yaml',
                'modified' => 1462364176
            ],
            'streams' => [
                'file' => 'system/config/streams.yaml',
                'modified' => 1461762502
            ],
            'system' => [
                'file' => 'system/config/system.yaml',
                'modified' => 1461762502
            ]
        ],
        'user/plugins' => [
            'plugins/anchors' => [
                'file' => 'user/plugins/anchors/anchors.yaml',
                'modified' => 1461762504
            ],
            'plugins/breadcrumbs' => [
                'file' => 'user/plugins/breadcrumbs/breadcrumbs.yaml',
                'modified' => 1462362455
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/error.yaml',
                'modified' => 1461762504
            ],
            'plugins/highlight' => [
                'file' => 'user/plugins/highlight/highlight.yaml',
                'modified' => 1462362734
            ],
            'plugins/shortcode-core' => [
                'file' => 'user/plugins/shortcode-core/shortcode-core.yaml',
                'modified' => 1462362603
            ],
            'plugins/shortcode-ui' => [
                'file' => 'user/plugins/shortcode-ui/shortcode-ui.yaml',
                'modified' => 1462362603
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/problems.yaml',
                'modified' => 1462362646
            ],
            'plugins/simplesearch' => [
                'file' => 'user/plugins/simplesearch/simplesearch.yaml',
                'modified' => 1462362646
            ]
        ]
    ],
    'data' => [
        'plugins' => [
            'anchors' => [
                'enabled' => true,
                'active' => true,
                'selectors' => '#body h2, #body h3, #body h4, #body h5',
                'placement' => 'right',
                'visible' => 'hover',
                'icon' => NULL,
                'class' => NULL
            ],
            'breadcrumbs' => [
                'enabled' => false,
                'show_all' => true,
                'built_in_css' => true,
                'include_home' => true,
                'icon_home' => '',
                'icon_divider_classes' => 'fa fa-angle-right',
                'link_trailing' => false
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ],
            'highlight' => [
                'enabled' => true,
                'theme' => 'arta'
            ],
            'shortcode-core' => [
                'enabled' => true,
                'active' => true,
                'active_admin' => true,
                'parser' => 'wordpress',
                'load_fontawesome' => false
            ],
            'shortcode-ui' => [
                'enabled' => true,
                'theme' => [
                    'tabs' => 'default'
                ]
            ],
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'simplesearch' => [
                'enabled' => true,
                'built_in_css' => false,
                'display_button' => false,
                'min_query_length' => 3,
                'route' => '/search',
                'template' => 'simplesearch_results',
                'filters' => [
                    'category' => 'docs'
                ],
                'filter_combinator' => 'and',
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ]
            ]
        ],
        'media' => [
            'defaults' => [
                'type' => 'file',
                'thumb' => 'media/thumb.png',
                'mime' => 'application/octet-stream',
                'image' => [
                    'filters' => [
                        'default' => [
                            0 => 'enableProgressive'
                        ]
                    ]
                ]
            ],
            'jpg' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpg.png',
                'mime' => 'image/jpeg'
            ],
            'jpe' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpg.png',
                'mime' => 'image/jpeg'
            ],
            'jpeg' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpeg.png',
                'mime' => 'image/jpeg'
            ],
            'png' => [
                'type' => 'image',
                'thumb' => 'media/thumb-png.png',
                'mime' => 'image/png'
            ],
            'gif' => [
                'type' => 'animated',
                'thumb' => 'media/thumb-gif.png',
                'mime' => 'image/gif'
            ],
            'svg' => [
                'type' => 'vector',
                'thumb' => 'media/thumb-gif.png',
                'mime' => 'image/svg+xml'
            ],
            'mp4' => [
                'type' => 'video',
                'thumb' => 'media/thumb-mp4.png',
                'mime' => 'video/mp4'
            ],
            'mov' => [
                'type' => 'video',
                'thumb' => 'media/thumb-mov.png',
                'mime' => 'video/quicktime'
            ],
            'm4v' => [
                'type' => 'video',
                'thumb' => 'media/thumb-m4v.png',
                'mime' => 'video/x-m4v'
            ],
            'swf' => [
                'type' => 'video',
                'thumb' => 'media/thumb-swf.png',
                'mime' => 'video/x-flv'
            ],
            'flv' => [
                'type' => 'video',
                'thumb' => 'media/thumb-flv.png',
                'mime' => 'video/x-flv'
            ],
            'mp3' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-mp3.png',
                'mime' => 'audio/mp3'
            ],
            'ogg' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-ogg.png',
                'mime' => 'audio/ogg'
            ],
            'wma' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-wma.png',
                'mime' => 'audio/wma'
            ],
            'm4a' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-m4a.png',
                'mime' => 'audio/m4a'
            ],
            'wav' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-wav.png',
                'mime' => 'audio/wav'
            ],
            'aiff' => [
                'type' => 'audio',
                'mime' => 'audio/aiff'
            ],
            'aif' => [
                'type' => 'audio',
                'mime' => 'audio/aif'
            ],
            'txt' => [
                'type' => 'file',
                'thumb' => 'media/thumb-txt.png',
                'mime' => 'text/plain'
            ],
            'xml' => [
                'type' => 'file',
                'thumb' => 'media/thumb-xml.png',
                'mime' => 'application/xml'
            ],
            'doc' => [
                'type' => 'file',
                'thumb' => 'media/thumb-doc.png',
                'mime' => 'application/msword'
            ],
            'docx' => [
                'type' => 'file',
                'mime' => 'application/msword'
            ],
            'xls' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xlt' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xlm' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xld' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xla' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xlc' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xlw' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xll' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'ppt' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-powerpoint'
            ],
            'pps' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-powerpoint'
            ],
            'rtf' => [
                'type' => 'file',
                'mime' => 'application/rtf'
            ],
            'bmp' => [
                'type' => 'file',
                'mime' => 'image/bmp'
            ],
            'tiff' => [
                'type' => 'file',
                'mime' => 'image/tiff'
            ],
            'mpeg' => [
                'type' => 'file',
                'mime' => 'video/mpeg'
            ],
            'mpg' => [
                'type' => 'file',
                'mime' => 'video/mpeg'
            ],
            'mpe' => [
                'type' => 'file',
                'mime' => 'video/mpeg'
            ],
            'avi' => [
                'type' => 'file',
                'mime' => 'video/msvideo'
            ],
            'wmv' => [
                'type' => 'file',
                'mime' => 'video/x-ms-wmv'
            ],
            'html' => [
                'type' => 'file',
                'thumb' => 'media/thumb-html.png',
                'mime' => 'text/html'
            ],
            'htm' => [
                'type' => 'file',
                'thumb' => 'media/thumb-html.png',
                'mime' => 'text/html'
            ],
            'pdf' => [
                'type' => 'file',
                'thumb' => 'media/thumb-pdf.png',
                'mime' => 'application/pdf'
            ],
            'zip' => [
                'type' => 'file',
                'thumb' => 'media/thumb-zip.png',
                'mime' => 'application/zip'
            ],
            '7z' => [
                'type' => 'file',
                'thumb' => 'media/thumb-7zip.png',
                'mime' => 'application/x-7z-compressed'
            ],
            'gz' => [
                'type' => 'file',
                'thumb' => 'media/thumb-gz.png',
                'mime' => 'application/gzip'
            ],
            'tar' => [
                'type' => 'file',
                'mime' => 'application/x-tar'
            ],
            'css' => [
                'type' => 'file',
                'thumb' => 'media/thumb-css.png',
                'mime' => 'text/css'
            ],
            'js' => [
                'type' => 'file',
                'thumb' => 'media/thumb-js.png',
                'mime' => 'application/javascript'
            ],
            'json' => [
                'type' => 'file',
                'thumb' => 'media/thumb-json.png',
                'mime' => 'application/json'
            ]
        ],
        'site' => [
            'title' => 'Core',
            'author' => [
                'name' => 'Alejandro Seoane',
                'email' => 'alejandro.seoane@mycroft.ai'
            ],
            'taxonomies' => [
                0 => 'category',
                1 => 'tag'
            ],
            'metadata' => [
                'description' => 'Docs Core Mycroft'
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
        ],
        'streams' => [
            'schemes' => [
                'image' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://images',
                        1 => 'system://images'
                    ]
                ],
                'page' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://pages'
                    ]
                ],
                'account' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://accounts'
                    ]
                ]
            ]
        ],
        'system' => [
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
                'alias' => '/start',
                'hide_in_urls' => false
            ],
            'pages' => [
                'theme' => 'learn2',
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
                    0 => '.git'
                ],
                'ignore_hidden' => true,
                'url_taxonomy_filters' => true,
                'markdown_extra' => true
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
                'css_pipeline' => true,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => true,
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
                ],
                'twig' => true
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
        ],
        'security' => [
            'salt' => 'FUJnyfbmE8rLMo'
        ]
    ]
];
