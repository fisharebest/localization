<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIq;

/**
 * Class LocaleArIq
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleArIq extends LocaleAr
{
    public function territory()
    {
        return new TerritoryIq();
    }
}
