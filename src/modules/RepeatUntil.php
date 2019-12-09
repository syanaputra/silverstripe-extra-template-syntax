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
        $totalCounter = $total;

        if($from instanceof ArrayList || $from instanceof DataList) {
            $count = $from->count();
            $totalCounter -= $count;
        }
        else if (is_numeric($from)) {
            $totalCounter -= $from;
        }

        if($totalCounter > 0) {
            for($i=0; $i<$totalCounter; $i++) {
                $output->push(ArrayData::create([
                    'Index' => $total - $totalCounter
                ]));
            }
        }

        return $output;
    }
}
