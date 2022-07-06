<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryZw;

/**
 * Class LocaleEnZw
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnZw extends LocaleEn
{
    public function territory()
    {
        return new TerritoryZw();
    }
}
