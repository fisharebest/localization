<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryVe;

/**
 * Class LocaleEsVe
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEsVe extends LocaleEs
{
    public function territory()
    {
        return new TerritoryVe();
    }
}
