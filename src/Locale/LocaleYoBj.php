<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBj;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleYoBj
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleYoBj extends LocaleYo
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryBj();
    }
}
