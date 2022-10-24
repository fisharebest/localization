<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBq;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleNlBq
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleNlBq extends LocaleNl
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryBq();
    }
}
