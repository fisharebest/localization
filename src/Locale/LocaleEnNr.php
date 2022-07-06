<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNr;

/**
 * Class LocaleEnNr
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnNr extends LocaleEn
{
    public function territory()
    {
        return new TerritoryNr();
    }
}
