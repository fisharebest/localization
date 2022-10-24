<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryEa;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEsEa
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEsEa extends LocaleEs
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryEa();
    }
}
