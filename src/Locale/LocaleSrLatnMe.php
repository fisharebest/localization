<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMe;

/**
 * Class LocaleSrLatnMe
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleSrLatnMe extends LocaleSrLatn
{
    public function territory()
    {
        return new TerritoryMe();
    }
}
