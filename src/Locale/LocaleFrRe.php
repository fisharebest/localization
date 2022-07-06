<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryRe;

/**
 * Class LocaleFrRe
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrRe extends LocaleFr
{
    public function territory()
    {
        return new TerritoryRe();
    }
}
