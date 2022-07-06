<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryEc;

/**
 * Class LocaleEsEc
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEsEc extends LocaleEs
{
    public function territory()
    {
        return new TerritoryEc();
    }
}
