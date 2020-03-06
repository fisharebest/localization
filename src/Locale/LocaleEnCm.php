<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCm;

/**
 * Class LocaleEnCm
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnCm extends LocaleEn
{
    public function territory()
    {
        return new TerritoryCm();
    }
}
