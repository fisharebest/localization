<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMr;

/**
 * Class LocaleFfLatnMr - Fulah
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFfLatnMr extends LocaleFfLatn
{
    public function territory()
    {
        return new TerritoryMr();
    }
}
