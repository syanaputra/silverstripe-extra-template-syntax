<?php

namespace Syanaputra\SilverstripeExtraTemplateSyntax\Modules;

use SilverStripe\ORM\ArrayList;
use SilverStripe\ORM\DataList;
use SilverStripe\View\ArrayData;

/**
 * Class Repeat
 *
 * @package Syanaputra\SilverstripeExtraTemplateSyntax\Modules
 * @author  Stephanus Yanaputra
 */
class Repeat implements BaseModule
{
    /**
     * @param int $total
     * @param int $startingNumbers
     * @return mixed
     */
    public static function process($total = 0, $startingNumbers = 0) {
        $output = ArrayList::create();

        if($total > 0) {
            for($i=0; $i<$total; $i++) {
                $output->push(ArrayData::create([
                    'Index' => $startingNumbers + $total
                ]));
            }
        }

        return $output;
    }
}
