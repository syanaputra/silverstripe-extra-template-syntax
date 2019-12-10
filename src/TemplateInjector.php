<?php

namespace Syanaputra\SilverstripeExtraTemplateSyntax;

use Syanaputra\SilverstripeExtraTemplateSyntax\Modules\Repeat;
use Syanaputra\SilverstripeExtraTemplateSyntax\Modules\RepeatUntil;
use SilverStripe\View\TemplateGlobalProvider;

/**
 * Class TemplateInjector
 *
 * @package Syanaputra\SilverstripeExtraTemplateSyntax
 * @author  Stephanus Yanaputra
 */
class TemplateInjector implements TemplateGlobalProvider
{

    /**
     * @param int $total
     * @param int $startingNumbers
     * @return \SilverStripe\ORM\ArrayList;
     */
    public static function run_repeat($total = 0, $startingNumbers = 0) {
        return Repeat::process($total, $startingNumbers);
    }

    /**
     * @param int $total
     * @param int $from
     * @return \SilverStripe\ORM\ArrayList;
     */
    public static function run_repeat_until($total = 0, $from = 0) {
        return RepeatUntil::process($total, $from);
    }

    /**
     * Add $SiteConfig to all SSViewers
     */
    public static function get_template_global_variables()
    {
        return [
            'Repeat' => 'run_repeat',
            'RepeatUntil' => 'run_repeat_until',
        ];
    }
}
