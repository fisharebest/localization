<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryFm;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEnFm
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEnFm extends LocaleEn
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryFm();
    }
}
