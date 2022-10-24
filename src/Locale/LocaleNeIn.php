<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIn;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleNeIn
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleNeIn extends LocaleNe
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryIn();
    }
}
