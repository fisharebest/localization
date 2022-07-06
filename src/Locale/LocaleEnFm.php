<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryFm;

/**
 * Class LocaleEnFm
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnFm extends LocaleEn
{
    public function territory()
    {
        return new TerritoryFm();
    }
}
