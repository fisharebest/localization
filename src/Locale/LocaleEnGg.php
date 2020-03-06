<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGg;

/**
 * Class LocaleEnGg
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnGg extends LocaleEn
{
    public function territory()
    {
        return new TerritoryGg();
    }
}
