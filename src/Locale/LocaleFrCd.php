<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCd;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleFrCd
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFrCd extends LocaleFr
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryCd();
    }
}
