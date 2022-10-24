<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGt;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEsGt
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEsGt extends LocaleEs
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryGt();
    }
}
