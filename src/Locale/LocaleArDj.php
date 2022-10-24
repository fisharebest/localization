<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryDj;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleArDj
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleArDj extends LocaleAr
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryDj();
    }
}
