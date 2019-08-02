<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/teal/dev/grav/grav-skeleton-onepage-site/user/config/system.yaml',
    'modified' => 1564771995,
    'data' => [
        'home' => [
            'alias' => '/home'
        ],
        'pages' => [
            'theme' => 'quark',
            'markdown' => [
                'extra' => false
            ],
            'process' => [
                'markdown' => true,
                'twig' => false
            ]
        ],
        'cache' => [
            'enabled' => false,
            'check' => [
                'method' => 'file'
            ],
            'driver' => 'auto',
            'prefix' => 'g'
        ],
        'twig' => [
            'cache' => true,
            'debug' => true,
            'auto_reload' => true,
            'autoescape' => false
        ],
        'assets' => [
            'css_pipeline' => false,
            'css_minify' => true,
            'css_rewrite' => true,
            'js_pipeline' => false,
            'js_minify' => true
        ],
        'debugger' => [
            'enabled' => true,
            'twig' => true,
            'shutdown' => [
                'close_connection' => true
            ]
        ]
    ]
];
