<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNe;

/**
 * Class LocaleHaNe
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleHaNe extends LocaleHa
{
    public function territory()
    {
        return new TerritoryNe();
    }
}
