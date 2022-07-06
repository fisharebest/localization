<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryUs;

/**
 * Class LocaleEsUs
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEsUs extends LocaleEs
{
    public function territory()
    {
        return new TerritoryUs();
    }
}
