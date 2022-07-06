<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIc;

/**
 * Class LocaleEsIc
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEsIc extends LocaleEs
{
    public function territory()
    {
        return new TerritoryIc();
    }
}
