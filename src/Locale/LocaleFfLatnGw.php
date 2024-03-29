<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGw;

/**
 * Class LocaleFfLatnGw - Fulah
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFfLatnGw extends LocaleFfLatn
{
    public function territory()
    {
        return new TerritoryGw();
    }
}
