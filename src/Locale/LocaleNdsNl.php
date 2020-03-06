<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNl;

/**
 * Class LocaleNdsNl - Low German
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleNdsNl extends LocaleNds
{
    public function territory()
    {
        return new TerritoryNl();
    }
}
