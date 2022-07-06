<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCd;

/**
 * Class LocaleFrCd
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleFrCd extends LocaleFr
{
    public function territory()
    {
        return new TerritoryCd();
    }
}
