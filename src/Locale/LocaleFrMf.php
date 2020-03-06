<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMf;

/**
 * Class LocaleFrMf
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrMf extends LocaleFr
{
    public function territory()
    {
        return new TerritoryMf();
    }
}
