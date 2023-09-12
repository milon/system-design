<?php

return [
    'Getting Started' => [
        'url' => '/getting-started',
        'children' => [],
    ],
    'Architecture Patterns' => [
        'url' => '/architecture-patterns',
        'children' => require_once(__DIR__.'/architecture-patterns.php'),
    ],
    'System Components' => [
        'url' => '/system-components',
        'children' => require_once(__DIR__.'/system-components.php'),
    ],
    'Glossary' => [
        'url' => '/glossary',
        'children' => require_once(__DIR__.'/glossary.php'),
    ],
    'Others' => [
        'url' => '/others',
        'children' => [
            'Frequently Asked Questions' => 'others/frequently-asked-questions',
            'About' => 'others/about',
        ],
    ],
];