<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryDk;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleFoDk
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFoDk extends LocaleFo
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryDk();
    }
}
