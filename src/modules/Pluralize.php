<?php

namespace Syanaputra\SilverstripeExtraTemplateSyntax\Modules;

use SilverStripe\ORM\ArrayList;
use SilverStripe\ORM\DataList;
use SilverStripe\View\ArrayData;

/**
 * Class Pluralize
 *
 * @package Syanaputra\SilverstripeExtraTemplateSyntax\Modules
 * @author  Stephanus Yanaputra
 */
class Pluralize implements BaseModule
{
    /**
     * @param int $quantity
     * @param string $singular
     * @param null $plural
     * @return string|null
     * @reference https://stackoverflow.com/a/16925755
     */
    public static function process($quantity = 1, $singular = '', $plural = NULL) {
        if ($quantity == 1 || !strlen($singular)) return $singular;
        if ($plural !== NULL) return $plural;

        $last_letter = strtolower($singular[strlen($singular) - 1]);
        switch ($last_letter) {
            case 'y':
                return substr($singular, 0, -1) . 'ies';
            case 's':
                return $singular . 'es';
            default:
                return $singular . 's';
        }

        return $output;
    }
}
