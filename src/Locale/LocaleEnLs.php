<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryLs;

/**
 * Class LocaleEnLs
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnLs extends LocaleEn
{
    public function territory()
    {
        return new TerritoryLs();
    }
}
