<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBs;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEnBs
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEnBs extends LocaleEn
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryBs();
    }
}
