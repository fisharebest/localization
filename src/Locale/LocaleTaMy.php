<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMy;

/**
 * Class LocaleTaMy
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleTaMy extends LocaleTa
{
    protected function digitsGroup()
    {
        return 3;
    }

    public function territory()
    {
        return new TerritoryMy();
    }
}
