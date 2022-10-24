<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryRw;

/**
 * Class LocaleFrRw
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFrRw extends LocaleFr
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryRw();
    }
}
