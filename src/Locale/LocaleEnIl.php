<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIl;

/**
 * Class LocaleEnIl
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnIl extends LocaleEn
{
    public function territory()
    {
        return new TerritoryIl();
    }
}
