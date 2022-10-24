<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGd;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEnGd
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEnGd extends LocaleEn
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryGd();
    }
}
