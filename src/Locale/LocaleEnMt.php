<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMt;

/**
 * Class LocaleEnMt
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnMt extends LocaleEn
{
    public function territory()
    {
        return new TerritoryMt();
    }
}
