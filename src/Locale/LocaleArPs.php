<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPs;

/**
 * Class LocaleArPs
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleArPs extends LocaleAr
{
    public function territory()
    {
        return new TerritoryPs();
    }
}
