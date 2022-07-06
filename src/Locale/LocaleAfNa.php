<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNa;

/**
 * Class LocaleAfNa
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleAfNa extends LocaleAf
{
    public function territory()
    {
        return new TerritoryNa();
    }
}
