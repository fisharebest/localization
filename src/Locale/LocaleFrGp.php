<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGp;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleFrGp
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFrGp extends LocaleFr
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryGp();
    }
}
