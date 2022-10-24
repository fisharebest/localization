<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCo;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleYrlCo - Nheengatu
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleYrlCo extends LocaleYrl
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryCo();
    }
}
