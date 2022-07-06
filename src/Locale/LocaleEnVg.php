<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryVg;

/**
 * Class LocaleEnVg
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnVg extends LocaleEn
{
    public function territory()
    {
        return new TerritoryVg();
    }
}
