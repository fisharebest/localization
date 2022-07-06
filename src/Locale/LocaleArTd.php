<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTd;

/**
 * Class LocaleArTd
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleArTd extends LocaleAr
{
    public function territory()
    {
        return new TerritoryTd();
    }
}
