<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/web/docs/user/plugins/simplesearch/simplesearch.yaml',
    'modified' => 1462362646,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'display_button' => false,
        'min_query_length' => 3,
        'route' => '/search',
        'template' => 'simplesearch_results',
        'filters' => [
            'category' => 'blog'
        ],
        'filter_combinator' => 'and',
        'order' => [
            'by' => 'date',
            'dir' => 'desc'
        ]
    ]
];
