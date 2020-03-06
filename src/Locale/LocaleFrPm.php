<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPm;

/**
 * Class LocaleFrPm
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrPm extends LocaleFr
{
    public function territory()
    {
        return new TerritoryPm();
    }
}
