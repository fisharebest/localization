<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPf;

/**
 * Class LocaleFrPf
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrPf extends LocaleFr
{
    public function territory()
    {
        return new TerritoryPf();
    }
}
