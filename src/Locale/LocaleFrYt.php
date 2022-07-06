<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryYt;

/**
 * Class LocaleFrYt
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrYt extends LocaleFr
{
    public function territory()
    {
        return new TerritoryYt();
    }
}
