<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAx;

/**
 * Class LocaleSvAx
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleSvAx extends LocaleSv
{
    public function territory()
    {
        return new TerritoryAx();
    }
}
