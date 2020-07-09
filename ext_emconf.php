<?php
$EM_CONF['yoast_news'] = [
    'title' => 'Yoast SEO for TYPO3 - EXT:news',
    'description' => 'Integrate Yoast SEO for TYPO3 in EXT:news',
    'category' => 'fe',
    'state' => 'stable',
    'author' => 'Richard Haeser',
    'author_email' => 'richardhaeser@gmail.com',
    'version' => '2.0.2',
    'constraints' => [
        'depends' => [
            'news' => '',
            'yoast_seo' => '',
            'typo3' => '8.7.0-9.5.99'
        ],
        'conflicts' => [],
        'suggests' => []
    ],
];
