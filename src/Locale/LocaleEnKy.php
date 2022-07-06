<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKy;

/**
 * Class LocaleEnKy
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnKy extends LocaleEn
{
    public function territory()
    {
        return new TerritoryKy();
    }
}
