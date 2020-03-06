<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPg;

/**
 * Class LocaleEnPg
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnPg extends LocaleEn
{
    public function territory()
    {
        return new TerritoryPg();
    }
}
