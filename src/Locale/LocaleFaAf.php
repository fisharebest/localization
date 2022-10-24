<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAf;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleFaAf
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFaAf extends LocaleFa
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryAf();
    }
}
