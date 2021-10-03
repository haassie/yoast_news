<?php

namespace RichardHaeser\YoastSeoNews\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class RobotsMetatagViewHelper extends AbstractViewHelper
{
    /**
     * Arguments initialization
     *
     */
    public function initializeArguments()
    {
        $this->registerArgument('no_index', 'int', 'Value of no_index', false, 0, false);
        $this->registerArgument('no_follow', 'int', 'Value of no_follow', false, 0, false);
    }

    /**
     * @return string
     */
    public function render()
    {
        $noIndex = ((bool)$this->arguments['no_index']) ? 'noindex' : 'index';
        $noFollow = ((bool)$this->arguments['no_follow']) ? 'nofollow' : 'follow';

        return $noIndex . ',' . $noFollow;
    }
}
