<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBs;

/**
 * Class LocaleEnBs
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnBs extends LocaleEn
{
    public function territory()
    {
        return new TerritoryBs();
    }
}
