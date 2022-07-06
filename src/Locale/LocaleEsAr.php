<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAr;

/**
 * Class LocaleEsAr
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEsAr extends LocaleEs
{
    public function territory()
    {
        return new TerritoryAr();
    }
}
