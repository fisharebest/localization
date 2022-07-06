<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMc;

/**
 * Class LocaleFrMc
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrMc extends LocaleFr
{
    public function territory()
    {
        return new TerritoryMc();
    }
}
