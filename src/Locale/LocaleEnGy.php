<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGy;

/**
 * Class LocaleEnGy
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnGy extends LocaleEn
{
    public function territory()
    {
        return new TerritoryGy();
    }
}
