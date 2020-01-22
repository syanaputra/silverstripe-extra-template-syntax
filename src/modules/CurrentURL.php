<?php

namespace Syanaputra\SilverstripeExtraTemplateSyntax\Modules;

use SilverStripe\ORM\ArrayList;
use SilverStripe\ORM\DataList;
use SilverStripe\View\ArrayData;
use SilverStripe\Control\Controller;
use SilverStripe\Control\Director;

/**
 * Class CurrentURL
 *
 * @package Syanaputra\SilverstripeExtraTemplateSyntax\Modules
 * @author  Stephanus Yanaputra
 */
class CurrentURL implements BaseModule
{
    /**
     * @return string
     */
    public static function process() {
        $currentURL = Director::absoluteBaseURL() . Controller::curr()->request->getURL(TRUE);
        if (substr($currentURL, -1) != '/') {
            $currentURL .= '/';
        }

        return $currentURL;
    }
}
