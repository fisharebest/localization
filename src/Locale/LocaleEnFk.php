<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryFk;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEnFk
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEnFk extends LocaleEn
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryFk();
    }
}
