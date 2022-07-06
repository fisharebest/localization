<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBi;

/**
 * Class LocaleFrBi
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrBi extends LocaleFr
{
    public function territory()
    {
        return new TerritoryBi();
    }
}
