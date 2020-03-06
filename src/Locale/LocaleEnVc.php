<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryVc;

/**
 * Class LocaleEnVc
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnVc extends LocaleEn
{
    public function territory()
    {
        return new TerritoryVc();
    }
}
