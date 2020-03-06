<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryHn;

/**
 * Class LocaleEsHn
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEsHn extends LocaleEs
{
    public function territory()
    {
        return new TerritoryHn();
    }
}
