<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGt;

/**
 * Class LocaleEsGt
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEsGt extends LocaleEs
{
    public function territory()
    {
        return new TerritoryGt();
    }
}
