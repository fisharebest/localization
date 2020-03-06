<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMy;

/**
 * Class LocaleEnMy
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnMy extends LocaleEn
{
    public function territory()
    {
        return new TerritoryMy();
    }
}
