<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBr;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEsBr
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEsBr extends LocaleEs
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryBr();
    }
}
