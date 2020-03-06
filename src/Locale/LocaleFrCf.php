<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCf;

/**
 * Class LocaleFrCf
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrCf extends LocaleFr
{
    public function territory()
    {
        return new TerritoryCf();
    }
}
