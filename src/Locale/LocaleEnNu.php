<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNu;

/**
 * Class LocaleEnNu
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnNu extends LocaleEn
{
    public function territory()
    {
        return new TerritoryNu();
    }
}
