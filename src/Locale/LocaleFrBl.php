<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBl;

/**
 * Class LocaleFrBl
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrBl extends LocaleFr
{
    public function territory()
    {
        return new TerritoryBl();
    }
}
