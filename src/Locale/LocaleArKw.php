<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKw;

/**
 * Class LocaleArKw
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleArKw extends LocaleAr
{
    public function territory()
    {
        return new TerritoryKw();
    }
}
