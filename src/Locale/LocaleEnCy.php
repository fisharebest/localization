<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCy;

/**
 * Class LocaleEnCy
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnCy extends LocaleEn
{
    public function territory()
    {
        return new TerritoryCy();
    }
}
