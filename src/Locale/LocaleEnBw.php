<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBw;

/**
 * Class LocaleEnBw
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnBw extends LocaleEn
{
    public function territory()
    {
        return new TerritoryBw();
    }
}
