<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryXk;

/**
 * Class LocaleSrLatnXk
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleSrLatnXk extends LocaleSrLatn
{
    public function territory()
    {
        return new TerritoryXk();
    }
}
