# Yoast SEO for TYPO3 - EXT:news
With this simple plugin, you integrate Yoast SEO for TYPO3 in EXT:news. 

## Installation and configuration
You can install the plugin by composer or by the Extension manager. Not many configuration is needed. 

* Install extension by composer / Extension manager
* Make sure the TypoScript is included in your project by using `<INCLUDE_TYPOSCRIPT: source="FILE:EXT:yoast_news/Configuration/TypoScript/setup.typoscript">`.
* Include PageTs config `<INCLUDE_TYPOSCRIPT: source="FILE:EXT:yoast_news/Configuration/TSconfig/Page.tsconfig">`
* Set your detail page id in your own Page TSconfig file. `TCEMAIN.preview.tx_news_domain_model_news.previewPageId = x`. 
Where x is the id of your detail page!
