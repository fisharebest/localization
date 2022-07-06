<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\Territory150;

/**
 * Class LocaleEn150
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEn150 extends LocaleEn
{
    public function numberSymbols()
    {
        return array(
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        );
    }

    public function territory()
    {
        return new Territory150();
    }
}
