<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryWf;

/**
 * Class LocaleFrWf
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrWf extends LocaleFr
{
    public function territory()
    {
        return new TerritoryWf();
    }
}
