<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMr;

/**
 * Class LocaleFrMr
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrMr extends LocaleFr
{
    public function territory()
    {
        return new TerritoryMr();
    }
}
