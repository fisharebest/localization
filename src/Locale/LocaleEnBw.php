<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBw;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEnBw
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEnBw extends LocaleEn
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryBw();
    }
}
