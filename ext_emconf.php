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
            'news' => '8.0.0-10.99.99',
            'yoast_seo' => '6.0.0-8.99.99',
            'typo3' => '9.5.0-11.5.99'
        ],
        'conflicts' => [],
        'suggests' => []
    ],
];
