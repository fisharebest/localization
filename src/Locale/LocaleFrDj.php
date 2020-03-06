<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryDj;

/**
 * Class LocaleFrDj
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrDj extends LocaleFr
{
    public function territory()
    {
        return new TerritoryDj();
    }
}
