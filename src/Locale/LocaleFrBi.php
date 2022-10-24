<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBi;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleFrBi
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFrBi extends LocaleFr
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryBi();
    }
}
