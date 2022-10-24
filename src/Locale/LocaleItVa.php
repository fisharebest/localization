<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryVa;

/**
 * Class LocaleItVa
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleItVa extends LocaleIt
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryVa();
    }
}
