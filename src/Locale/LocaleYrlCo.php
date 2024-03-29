<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCo;

/**
 * Class LocaleYrlCo - Nheengatu
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleYrlCo extends LocaleYrl
{
    public function territory()
    {
        return new TerritoryCo();
    }
}
