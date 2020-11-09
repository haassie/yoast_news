<?php
$llPrefix = 'LLL:EXT:yoast_news/Resources/Private/Language/TCA.xlf:';

$openGraphCropConfiguration = [
    'config' => [
        'cropVariants' => [
            'default' => [
                'disabled' => true,
            ],
            'social' => [
                'title' => $llPrefix . 'imwizard.crop_variant.social',
                'coverAreas' => [],
                'cropArea' => [
                    'x' => '0.0',
                    'y' => '0.0',
                    'width' => '1.0',
                    'height' => '1.0'
                ],
                'allowedAspectRatios' => [
                    '1.91:1' => [
                        'title' => $llPrefix . 'imwizard.ratio.191_1',
                        'value' => 1.91 / 1
                    ],
                    'NaN' => [
                        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                        'value' => 0.0
                    ],
                ],
                'selectedRatio' => '1.91:1',
            ],
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tx_news_domain_model_news',
    [
        'tx_yoastseo_snippetpreview' => [
            'label' => $llPrefix . 'news.field.snippetPreview',
            'exclude' => true,
            'displayCond' => 'REC:NEW:false',
            'config' => [
                'type' => 'text',
                'renderType' => 'snippetPreview',
                'settings' => [
                    'titleField' => 'alternative_title',
                    'descriptionField' => 'description'
                ]
            ]
        ],
        'tx_yoastseo_readability_analysis' => [
            'label' => $llPrefix . 'news.field.analysis',
            'exclude' => true,
            'displayCond' => 'REC:NEW:false',
            'config' => [
                'type' => 'text',
                'renderType' => 'readabilityAnalysis'
            ]
        ],
        'tx_yoastseo_focuskeyword' => [
            'label' => $llPrefix . 'news.field.seoFocusKeyword',
            'exclude' => true,
            'config' => [
                'type' => 'input',
            ]
        ],
        'tx_yoastseo_focuskeyword_analysis' => [
            'label' => $llPrefix . 'news.field.analysis',
            'exclude' => true,
            'displayCond' => 'REC:NEW:false',
            'config' => [
                'type' => 'input',
                'renderType' => 'focusKeywordAnalysis',
                'settings' => [
                    'focusKeywordField' => 'tx_yoastseo_focuskeyword',
                ]
            ]
        ],
        'og_title' => [
            'exclude' => true,
            'l10n_mode' => 'prefixLangTitle',
            'label' => $llPrefix . 'og_title',
            'config' => [
                'type' => 'input',
                'size' => 40,
                'max' => 255,
                'eval' => 'trim'
            ]
        ],
        'og_description' => [
            'exclude' => true,
            'l10n_mode' => 'prefixLangTitle',
            'label' => $llPrefix . 'og_description',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 3
            ]
        ],
        'og_image' => [
            'exclude' => true,
            'label' => $llPrefix . 'og_image',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'og_image',
                [
                    // Use the imageoverlayPalette instead of the basicoverlayPalette
                    'overrideChildTca' => [
                        'types' => [
                            '0' => [
                                'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                                'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette'
                            ]
                        ],
                        'columns' => [
                            'crop' => $openGraphCropConfiguration
                        ]
                    ],
                    'behaviour' => [
                        'allowLanguageSynchronization' => true
                    ]
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            )
        ],
        'twitter_title' => [
            'exclude' => true,
            'l10n_mode' => 'prefixLangTitle',
            'label' => $llPrefix . 'twitter_title',
            'config' => [
                'type' => 'input',
                'size' => 40,
                'max' => 255,
                'eval' => 'trim'
            ]
        ],
        'twitter_description' => [
            'exclude' => true,
            'l10n_mode' => 'prefixLangTitle',
            'label' => $llPrefix . 'twitter_description',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 3
            ]
        ],
        'twitter_image' => [
            'exclude' => true,
            'label' => $llPrefix . 'twitter_image',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'twitter_image',
                [
                    // Use the imageoverlayPalette instead of the basicoverlayPalette
                    'overrideChildTca' => [
                        'types' => [
                            '0' => [
                                'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                                'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette'
                            ]
                        ],
                        'columns' => [
                            'crop' => $openGraphCropConfiguration
                        ]
                    ],
                    'behaviour' => [
                        'allowLanguageSynchronization' => true
                    ]
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            )
        ],
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tx_news_domain_model_news',
    'yoast-social-og',
    '
            --linebreak--, og_title, --linebreak--, og_description, --linebreak--, og_image,
        '
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tx_news_domain_model_news',
    'yoast-social-twitter',
    '
            --linebreak--, twitter_title, --linebreak--, twitter_description, --linebreak--, twitter_image,
        '
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tx_news_domain_model_news',
    'yoast-metadata',
    '
    --linebreak--, tx_yoastseo_snippetpreview,
    --linebreak--, alternative_title,
    --linebreak--, description,
    '
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tx_news_domain_model_news',
    'yoast-focuskeyword',
    '
    --linebreak--, tx_yoastseo_focuskeyword,
    --linebreak--, tx_yoastseo_focuskeyword_analysis
    '
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tx_news_domain_model_news',
    'yoast-readability',
    '
    --linebreak--, tx_yoastseo_readability_analysis
    '
);

$GLOBALS['TCA']['tx_news_domain_model_news']['columns']['alternative_title']['label'] = $llPrefix . 'news.field.alternative_title';
$GLOBALS['TCA']['tx_news_domain_model_news']['palettes']['metatags']['showitem'] =
    preg_replace('/description(.*,|.*$)/', '', $GLOBALS['TCA']['tx_news_domain_model_news']['palettes']['metatags']['showitem']);


$GLOBALS['TCA']['tx_news_domain_model_news']['palettes']['alternativeTitles']['showitem'] =
    preg_replace('/alternative_title(.*,|.*$)/', '', $GLOBALS['TCA']['tx_news_domain_model_news']['palettes']['alternativeTitles']['showitem']);

$GLOBALS['TCA']['tx_news_domain_model_news']['types'][0]['showitem'] =
    str_replace('--palette--;;sitemap,', '', $GLOBALS['TCA']['tx_news_domain_model_news']['types'][0]['showitem']);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_news_domain_model_news',
    '
    --div--;' . $llPrefix . 'news.tabs.seo,
        --palette--;' . $llPrefix . 'news.palettes.metadata;yoast-metadata,
        --palette--;' . $llPrefix . 'news.palettes.readability;yoast-readability,
        --palette--;' . $llPrefix . 'news.palettes.focusKeyphrase;yoast-focuskeyword,
        --palette--;;sitemap,
    --div--;' . $llPrefix . 'news.tabs.social,
        --palette--;' . $llPrefix . 'news.palettes.og;yoast-social-og,
        --palette--;' . $llPrefix . 'news.palettes.twitter;yoast-social-twitter,        
    ',
    '',
    'after:bodytext'
);
