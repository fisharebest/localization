<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryVu;

/**
 * Class LocaleEnVu
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnVu extends LocaleEn
{
    public function territory()
    {
        return new TerritoryVu();
    }
}
