<?php

namespace Syanaputra\SilverstripeExtraTemplateSyntax\Modules;

use SilverStripe\ORM\ArrayList;
use SilverStripe\ORM\DataList;
use SilverStripe\View\ArrayData;

/**
 * Class RepeatUntil
 *
 * @package Syanaputra\SilverstripeExtraTemplateSyntax\Modules
 * @author  Stephanus Yanaputra
 */
class RepeatUntil implements BaseModule
{
    /**
     * @param int $total
     * @param int $from
     * @return mixed
     */
    public static function process($total = 0, $from = 0) {
        $output = ArrayList::create();

        if($from instanceof ArrayList || $from instanceof DataList) {
            $count = $from->count();
            $total -= $count;
        }
        else if (is_numeric($from)) {
            $total -= $from;
        }

        if($total > 0) {
            for($i=0; $i<$total; $i++) {
                $output->push(ArrayData::create([
                    'Index' => $i
                ]));
            }
        }

        return $output;
    }
}
