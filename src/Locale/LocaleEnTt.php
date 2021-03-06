<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTt;

/**
 * Class LocaleEnTt
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnTt extends LocaleEn
{
    public function territory()
    {
        return new TerritoryTt();
    }
}
