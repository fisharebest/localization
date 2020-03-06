<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBi;

/**
 * Class LocaleEnBi
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnBi extends LocaleEn
{
    public function territory()
    {
        return new TerritoryBi();
    }
}
