<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryLb;

/**
 * Class LocaleArLb
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleArLb extends LocaleAr
{
    public function territory()
    {
        return new TerritoryLb();
    }
}
