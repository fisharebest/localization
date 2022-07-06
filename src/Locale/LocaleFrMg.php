<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMg;

/**
 * Class LocaleFrMg
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrMg extends LocaleFr
{
    public function territory()
    {
        return new TerritoryMg();
    }
}
