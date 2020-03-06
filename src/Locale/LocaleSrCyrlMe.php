<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMe;

/**
 * Class LocaleSrCyrlMe
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleSrCyrlMe extends LocaleSrCyrl
{
    public function territory()
    {
        return new TerritoryMe();
    }
}
