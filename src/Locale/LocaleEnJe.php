<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryJe;

/**
 * Class LocaleEnJe
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEnJe extends LocaleEn
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryJe();
    }
}
