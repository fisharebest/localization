<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMd;

/**
 * Class LocaleRuMd
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleRuMd extends LocaleRu
{
    public function territory()
    {
        return new TerritoryMd();
    }
}
