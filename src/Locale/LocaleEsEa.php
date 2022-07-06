<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryEa;

/**
 * Class LocaleEsEa
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEsEa extends LocaleEs
{
    public function territory()
    {
        return new TerritoryEa();
    }
}
