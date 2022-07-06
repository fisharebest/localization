<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGu;

/**
 * Class LocaleEnGu
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnGu extends LocaleEn
{
    public function territory()
    {
        return new TerritoryGu();
    }
}
