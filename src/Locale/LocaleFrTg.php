<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTg;

/**
 * Class LocaleFrTg
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrTg extends LocaleFr
{
    public function territory()
    {
        return new TerritoryTg();
    }
}
