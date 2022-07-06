<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySy;

/**
 * Class LocaleFrSy
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrSy extends LocaleFr
{
    public function territory()
    {
        return new TerritorySy();
    }
}
