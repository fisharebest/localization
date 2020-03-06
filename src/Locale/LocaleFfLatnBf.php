<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBf;

/**
 * Class LocaleFfLatn - Fulah
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleFfLatnBf extends LocaleFfLatn
{
    public function territory()
    {
        return new TerritoryBf();
    }
}
