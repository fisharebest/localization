<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPa;

/**
 * Class LocaleEsPa
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEsPa extends LocaleEs
{
    public function territory()
    {
        return new TerritoryPa();
    }
}
