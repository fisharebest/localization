<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMl;

/**
 * Class LocaleFrMl
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrMl extends LocaleFr
{
    public function territory()
    {
        return new TerritoryMl();
    }
}
