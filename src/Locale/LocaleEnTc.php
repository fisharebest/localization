<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTc;

/**
 * Class LocaleEnTc
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnTc extends LocaleEn
{
    public function territory()
    {
        return new TerritoryTc();
    }
}
