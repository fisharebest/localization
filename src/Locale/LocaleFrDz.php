<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryDz;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleFrDz
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFrDz extends LocaleFr
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryDz();
    }
}
