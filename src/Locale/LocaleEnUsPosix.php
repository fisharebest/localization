<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Variant\VariantPosix;

/**
 * Class LocaleEnUsPosix
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnUsPosix extends LocaleEnUs
{
    public function numberSymbols()
    {
        return array(
            self::GROUP => '',
        );
    }

    public function variant()
    {
        return new VariantPosix();
    }
}
