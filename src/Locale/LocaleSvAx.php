<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAx;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleSvAx
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSvAx extends LocaleSv
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryAx();
    }
}
