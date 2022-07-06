<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryFj;

/**
 * Class LocaleEnFj
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnFj extends LocaleEn
{
    public function territory()
    {
        return new TerritoryFj();
    }
}
