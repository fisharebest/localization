<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryDz;

/**
 * Class LocaleFrDz
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrDz extends LocaleFr
{
    public function territory()
    {
        return new TerritoryDz();
    }
}
