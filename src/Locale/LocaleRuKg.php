<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryKg;

/**
 * Class LocaleRuKg
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleRuKg extends LocaleRu
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryKg();
    }
}
