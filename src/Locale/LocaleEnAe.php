<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAe;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEnAe
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEnAe extends LocaleEn
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryAe();
    }
}
