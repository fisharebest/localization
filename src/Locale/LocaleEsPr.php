<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPr;

/**
 * Class LocaleEsPr
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEsPr extends LocaleEs
{
    public function territory()
    {
        return new TerritoryPr();
    }
}
