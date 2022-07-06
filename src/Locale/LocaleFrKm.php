<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKm;

/**
 * Class LocaleFrKm
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrKm extends LocaleFr
{
    public function territory()
    {
        return new TerritoryKm();
    }
}
