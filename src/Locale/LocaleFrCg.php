<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCg;

/**
 * Class LocaleFrCg
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrCg extends LocaleFr
{
    public function territory()
    {
        return new TerritoryCg();
    }
}
