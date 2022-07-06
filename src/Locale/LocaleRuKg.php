<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKg;

/**
 * Class LocaleRuKg
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleRuKg extends LocaleRu
{
    public function territory()
    {
        return new TerritoryKg();
    }
}
