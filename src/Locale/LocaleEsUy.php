<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryUy;

/**
 * Class LocaleEsUy
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEsUy extends LocaleEs
{
    public function territory()
    {
        return new TerritoryUy();
    }
}
