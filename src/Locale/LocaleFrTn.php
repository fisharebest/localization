<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTn;

/**
 * Class LocaleFrTn
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrTn extends LocaleFr
{
    public function territory()
    {
        return new TerritoryTn();
    }
}
