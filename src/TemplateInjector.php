<?php

namespace Syanaputra\SilverstripeExtraTemplateSyntax;

use Syanaputra\SilverstripeExtraTemplateSyntax\Modules\Repeat;

/**
 * Class TemplateInjector
 *
 * @package Syanaputra\SilverstripeExtraTemplateSyntax
 * @author  Stephanus Yanaputra
 */
class TemplateInjector implements TemplateGlobalProvider
{

    /**
     * Helper to do calculation
     *
     * @param int $total
     * @param $startingNumbers
     * @return \SilverStripe\ORM\ArrayList;
     */
    public static function run_repeat($total = 0, $startingNumbers = 0) {
        return Repeat::process($total, $startingNumbers);
    }

    /**
     * Add $SiteConfig to all SSViewers
     */
    public static function get_template_global_variables()
    {
        return [
            'Repeat' => 'run_repeat',
        ];
    }
}
