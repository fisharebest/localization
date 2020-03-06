<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPn;

/**
 * Class LocaleEnPn
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnPn extends LocaleEn
{
    public function territory()
    {
        return new TerritoryPn();
    }
}
