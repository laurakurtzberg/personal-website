<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'themes://custom-quark/custom-quark.yaml',
    'modified' => 1676331806,
    'size' => 370,
    'data' => [
        'streams' => [
            'schemes' => [
                'theme' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user://themes/custom-quark',
                            1 => 'user://themes/quark'
                        ]
                    ]
                ]
            ]
        ],
        'enabled' => true,
        'production-mode' => true,
        'grid-size' => 'grid-lg',
        'header-fixed' => true,
        'header-animated' => true,
        'header-dark' => true,
        'header-transparent' => false,
        'sticky-footer' => false,
        'blog-page' => '/blog',
        'spectre' => [
            'exp' => true,
            'icons' => true
        ]
    ]
];
