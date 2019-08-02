<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/teal/dev/grav/grav-skeleton-onepage-site/system/config/streams.yaml',
    'modified' => 1561152263,
    'data' => [
        'schemes' => [
            'image' => [
                'type' => 'Stream',
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
    ]
];
