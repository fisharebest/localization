<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBi;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEnBi
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEnBi extends LocaleEn
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryBi();
    }
}
