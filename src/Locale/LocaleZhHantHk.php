<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryHk;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleZhHantHk
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleZhHantHk extends LocaleZhHant
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryHk();
    }
}
