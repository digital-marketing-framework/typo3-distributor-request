<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Digital Marketing Framework - Distributor - HTTP Request',
    'description' => 'Send form data to different target systems via HTTP requests',
    'category' => 'be',
    'author_email' => 'info@mediatis.de',
    'author_company' => 'Mediatis AG',
    'state' => 'stable',
    'version' => '2.2.2',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-12.4.99',
            'dmf_core' => '2.2.2-2.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
