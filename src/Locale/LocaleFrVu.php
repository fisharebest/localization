<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryVu;

/**
 * Class LocaleFrVu
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrVu extends LocaleFr
{
    public function territory()
    {
        return new TerritoryVu();
    }
}
