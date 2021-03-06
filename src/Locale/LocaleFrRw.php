<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryRw;

/**
 * Class LocaleFrRw
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrRw extends LocaleFr
{
    public function territory()
    {
        return new TerritoryRw();
    }
}
