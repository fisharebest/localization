<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNg;

/**
 * Class LocaleEnNg
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnNg extends LocaleEn
{
    public function territory()
    {
        return new TerritoryNg();
    }
}
