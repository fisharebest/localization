<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryOm;

/**
 * Class LocaleArOm
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleArOm extends LocaleAr
{
    public function territory()
    {
        return new TerritoryOm();
    }
}
