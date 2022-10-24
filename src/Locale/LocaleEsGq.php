<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGq;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEsGq
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEsGq extends LocaleEs
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryGq();
    }
}
