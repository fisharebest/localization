<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryEr;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleTiEr
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleTiEr extends LocaleTi
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryEr();
    }
}
