<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGu;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEnGu
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEnGu extends LocaleEn
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryGu();
    }
}
