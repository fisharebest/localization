<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAw;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleNlAw
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleNlAw extends LocaleNl
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryAw();
    }
}
