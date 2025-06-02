<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Anyrel - Distributor - HTTP Request',
    'description' => 'Send form data to different target systems via HTTP requests',
    'category' => 'be',
    'author_email' => 'info@mediatis.de',
    'author_company' => 'Mediatis AG',
    'state' => 'stable',
    'version' => '3.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-13.4.99',
            'dmf_core' => '3.0.0-3.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
