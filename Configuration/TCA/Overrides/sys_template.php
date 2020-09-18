<?php
defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'yoast_news',
    'Configuration/TypoScript',
    'Yoast SEO for TYPO3 - EXT:news'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'yoast_news',
    'Configuration/TypoScript/CMS8',
    'Yoast SEO for TYPO3 - EXT:news (CMS8)'
);
