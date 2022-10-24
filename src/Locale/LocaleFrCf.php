<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCf;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleFrCf
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFrCf extends LocaleFr
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryCf();
    }
}
