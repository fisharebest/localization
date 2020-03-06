<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySx;

/**
 * Class LocaleEnSx
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnSx extends LocaleEn
{
    public function territory()
    {
        return new TerritorySx();
    }
}
