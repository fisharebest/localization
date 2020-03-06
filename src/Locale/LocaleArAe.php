<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAe;

/**
 * Class LocaleArAe
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleArAe extends LocaleAr
{
    public function territory()
    {
        return new TerritoryAe();
    }
}
