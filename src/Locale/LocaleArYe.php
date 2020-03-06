<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryYe;

/**
 * Class LocaleArYe
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleArYe extends LocaleAr
{
    public function territory()
    {
        return new TerritoryYe();
    }
}
