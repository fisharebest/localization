<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritorySs;

/**
 * Class LocaleNusSs
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleNusSs extends LocaleNus
{
    public function territory(): TerritoryInterface
    {
        return new TerritorySs();
    }
}
