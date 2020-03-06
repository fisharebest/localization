<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBa;

/**
 * Class LocaleSrCyrlBa
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleSrCyrlBa extends LocaleSrCyrl
{
    public function territory()
    {
        return new TerritoryBa();
    }
}
