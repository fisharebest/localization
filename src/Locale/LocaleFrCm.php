<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCm;

/**
 * Class LocaleFrCm
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrCm extends LocaleFr
{
    public function territory()
    {
        return new TerritoryCm();
    }
}
