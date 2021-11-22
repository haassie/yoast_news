<?php
$EM_CONF['yoast_news'] = [
    'title' => 'Yoast SEO for TYPO3 - EXT:news',
    'description' => 'Integrate Yoast SEO for TYPO3 in EXT:news',
    'category' => 'fe',
    'state' => 'stable',
    'author' => 'Richard Haeser',
    'author_email' => 'richard@richardhaeser.com',
    'version' => '2.1.2',
    'constraints' => [
        'depends' => [
            'news' => '7.0.0-9.99.99',
            'yoast_seo' => '5.0.0-8.99.99',
            'typo3' => '8.7.0-10.4.99'
        ],
        'conflicts' => [],
        'suggests' => []
    ],
];
