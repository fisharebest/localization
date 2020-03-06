<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAf;

/**
 * Class LocaleUzArabAf
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleUzArabAf extends LocaleUzArab
{
    public function territory()
    {
        return new TerritoryAf();
    }
}
