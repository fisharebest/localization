<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAg;

/**
 * Class LocaleEnAg
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnAg extends LocaleEn
{
    public function territory()
    {
        return new TerritoryAg();
    }
}
