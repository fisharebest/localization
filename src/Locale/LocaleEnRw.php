<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryRw;

/**
 * Class LocaleEnRw
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnRw extends LocaleEn
{
    public function territory()
    {
        return new TerritoryRw();
    }
}
