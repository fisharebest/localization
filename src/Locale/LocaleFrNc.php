<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNc;

/**
 * Class LocaleFrNc
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrNc extends LocaleFr
{
    public function territory()
    {
        return new TerritoryNc();
    }
}
