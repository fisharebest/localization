<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNz;

/**
 * Class LocaleEnNz
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnNz extends LocaleEn
{
    public function territory()
    {
        return new TerritoryNz();
    }
}
