<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAr;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEsAr
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEsAr extends LocaleEs
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryAr();
    }
}
