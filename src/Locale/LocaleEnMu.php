<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMu;

/**
 * Class LocaleEnMu
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnMu extends LocaleEn
{
    public function territory()
    {
        return new TerritoryMu();
    }
}
