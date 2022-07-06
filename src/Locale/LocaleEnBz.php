<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBz;

/**
 * Class LocaleEnBz
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnBz extends LocaleEn
{
    public function territory()
    {
        return new TerritoryBz();
    }
}
