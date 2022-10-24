<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryUa;

/**
 * Class LocaleRuUa
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleRuUa extends LocaleRu
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryUa();
    }
}
