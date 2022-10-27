<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGn;

/**
 * Class LocaleFfAdlmGn - Fulah
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFfAdlmGn extends LocaleFfAdlm
{
    public function territory()
    {
        return new TerritoryGn();
    }
}
