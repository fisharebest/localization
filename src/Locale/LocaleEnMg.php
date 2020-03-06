<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMg;

/**
 * Class LocaleEnMg
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnMg extends LocaleEn
{
    public function territory()
    {
        return new TerritoryMg();
    }
}
