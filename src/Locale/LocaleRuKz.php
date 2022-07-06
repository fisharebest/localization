<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKz;

/**
 * Class LocaleRuKz
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleRuKz extends LocaleRu
{
    public function territory()
    {
        return new TerritoryKz();
    }
}
