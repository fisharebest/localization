<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBf;

/**
 * Class LocaleFrBf
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrBf extends LocaleFr
{
    public function territory()
    {
        return new TerritoryBf();
    }
}
