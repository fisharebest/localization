<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryEr;

/**
 * Class LocaleEnEr
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnEr extends LocaleEn
{
    public function territory()
    {
        return new TerritoryEr();
    }
}
