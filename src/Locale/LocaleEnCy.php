<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCy;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEnCy
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEnCy extends LocaleEn
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryCy();
    }
}
