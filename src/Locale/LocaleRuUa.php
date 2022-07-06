<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryUa;

/**
 * Class LocaleRuUa
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleRuUa extends LocaleRu
{
    public function territory()
    {
        return new TerritoryUa();
    }
}
