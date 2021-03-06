<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryZm;

/**
 * Class LocaleEnZm
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnZm extends LocaleEn
{
    public function territory()
    {
        return new TerritoryZm();
    }
}
