<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritorySx;

/**
 * Class LocaleNlSx
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleNlSx extends LocaleNl
{
    public function territory(): TerritoryInterface
    {
        return new TerritorySx();
    }
}
