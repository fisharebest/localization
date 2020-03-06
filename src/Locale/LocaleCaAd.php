<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAd;

/**
 * Class LocaleCaAd
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleCaAd extends LocaleCa
{
    public function territory()
    {
        return new TerritoryAd();
    }
}
