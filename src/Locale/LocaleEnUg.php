<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryUg;

/**
 * Class LocaleEnUg
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnUg extends LocaleEn
{
    public function territory()
    {
        return new TerritoryUg();
    }
}
