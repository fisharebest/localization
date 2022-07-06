<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryEg;

/**
 * Class LocaleArEg
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleArEg extends LocaleAr
{
    public function territory()
    {
        return new TerritoryEg();
    }
}
