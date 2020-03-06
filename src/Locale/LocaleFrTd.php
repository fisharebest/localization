<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTd;

/**
 * Class LocaleFrTd
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrTd extends LocaleFr
{
    public function territory()
    {
        return new TerritoryTd();
    }
}
