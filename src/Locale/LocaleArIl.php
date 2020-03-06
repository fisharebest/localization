<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIl;

/**
 * Class LocaleArIl
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleArIl extends LocaleAr
{
    public function territory()
    {
        return new TerritoryIl();
    }
}
