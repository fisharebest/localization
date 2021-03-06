<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryLc;

/**
 * Class LocaleEnLc
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnLc extends LocaleEn
{
    public function territory()
    {
        return new TerritoryLc();
    }
}
