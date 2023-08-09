<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "yoast_news".
 *
 * Auto generated 01-09-2022 16:19
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Yoast SEO for TYPO3 - EXT:news',
  'description' => 'MODIFIED: TYPO3 12. Integrate Yoast SEO for TYPO3 in EXT:news',
  'category' => 'fe',
  'version' => '2.1.2',
  'state' => 'stable',
  'uploadfolder' => false,
  'clearcacheonload' => false,
  'author' => 'Richard Haeser',
  'author_email' => 'richard@richardhaeser.com',
  'author_company' => NULL,
  'constraints' => 
  array (
    'depends' => 
    array (
      'news' => '7.0.0-11.99.99',
      'yoast_seo' => '5.0.0-9.99.99',
      'typo3' => '8.7.0-12.4.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
);

