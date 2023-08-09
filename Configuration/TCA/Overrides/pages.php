<?php
defined('TYPO3') || die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'yoast_news',
    'Configuration/TSconfig/Page.tsconfig',
    'Yoast SEO for TYPO3 - EXT:news'
);
