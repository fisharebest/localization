<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGd;

/**
 * Class LocaleEnGd
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnGd extends LocaleEn
{
    public function territory()
    {
        return new TerritoryGd();
    }
}
