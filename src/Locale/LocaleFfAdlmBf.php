<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBf;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleFfAdlmBf - Fulah
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFfAdlmBf extends LocaleFfAdlm
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryBf();
    }
}
