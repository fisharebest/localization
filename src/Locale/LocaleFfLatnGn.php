<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGn;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleFfLatnGn - Fulah
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFfLatnGn extends LocaleFfLatn
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryGn();
    }
}
