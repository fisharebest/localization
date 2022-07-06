<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGn;

/**
 * Class LocaleFrGn
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrGn extends LocaleFr
{
    public function territory()
    {
        return new TerritoryGn();
    }
}
