<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBz;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEnBz
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEnBz extends LocaleEn
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryBz();
    }
}
