<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMq;

/**
 * Class LocaleFrMq
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrMq extends LocaleFr
{
    public function territory()
    {
        return new TerritoryMq();
    }
}
