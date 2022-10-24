<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGq;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleFrGq
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFrGq extends LocaleFr
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryGq();
    }
}
