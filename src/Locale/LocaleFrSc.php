<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySc;

/**
 * Class LocaleFrSc
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrSc extends LocaleFr
{
    public function territory()
    {
        return new TerritorySc();
    }
}
