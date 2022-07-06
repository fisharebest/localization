<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMu;

/**
 * Class LocaleFrMu
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrMu extends LocaleFr
{
    public function territory()
    {
        return new TerritoryMu();
    }
}
