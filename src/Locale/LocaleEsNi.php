<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNi;

/**
 * Class LocaleEsNi
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEsNi extends LocaleEs
{
    public function territory()
    {
        return new TerritoryNi();
    }
}
