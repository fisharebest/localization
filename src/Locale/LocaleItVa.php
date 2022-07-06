<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryVa;

/**
 * Class LocaleItVa
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleItVa extends LocaleIt
{
    public function territory()
    {
        return new TerritoryVa();
    }
}
