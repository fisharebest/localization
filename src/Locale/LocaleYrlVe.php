<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryVe;

/**
 * Class LocaleYrlVe - Nheengatu
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleYrlVe extends LocaleYrl
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryVe();
    }
}
