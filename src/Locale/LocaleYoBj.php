<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBj;

/**
 * Class LocaleYoBj
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleYoBj extends LocaleYo
{
    public function territory()
    {
        return new TerritoryBj();
    }
}
