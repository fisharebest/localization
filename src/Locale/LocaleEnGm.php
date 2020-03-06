<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGm;

/**
 * Class LocaleEnGm
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnGm extends LocaleEn
{
    public function territory()
    {
        return new TerritoryGm();
    }
}
