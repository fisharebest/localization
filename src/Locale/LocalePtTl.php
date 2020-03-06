<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTl;

/**
 * Class LocalePtTl
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocalePtTl extends LocalePt
{
    public function territory()
    {
        return new TerritoryTl();
    }
}
