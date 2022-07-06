<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBm;

/**
 * Class LocaleEnBm
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnBm extends LocaleEn
{
    public function territory()
    {
        return new TerritoryBm();
    }
}
