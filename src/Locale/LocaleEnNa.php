<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNa;

/**
 * Class LocaleEnNa
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnNa extends LocaleEn
{
    public function territory()
    {
        return new TerritoryNa();
    }
}
