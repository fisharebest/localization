<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCi;

/**
 * Class LocaleFrCi
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrCi extends LocaleFr
{
    public function territory()
    {
        return new TerritoryCi();
    }
}
