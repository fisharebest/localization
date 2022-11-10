<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\Territory150;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEn150
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEn150 extends LocaleEn
{
    public function territory(): TerritoryInterface
    {
        return new Territory150();
    }
}
