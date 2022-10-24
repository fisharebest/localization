<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGg;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEnGg
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEnGg extends LocaleEn
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryGg();
    }
}
