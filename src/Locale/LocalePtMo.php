<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMo;

/**
 * Class LocalePtMo
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocalePtMo extends LocalePt
{
    public function territory()
    {
        return new TerritoryMo();
    }
}
