<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryHt;

/**
 * Class LocaleFrHt
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrHt extends LocaleFr
{
    public function territory()
    {
        return new TerritoryHt();
    }
}
