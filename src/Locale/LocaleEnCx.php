<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCx;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEnCx
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEnCx extends LocaleEn
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryCx();
    }
}
