<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMw;

/**
 * Class LocaleEnMw
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnMw extends LocaleEn
{
    public function territory()
    {
        return new TerritoryMw();
    }
}
