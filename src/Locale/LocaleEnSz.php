<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySz;

/**
 * Class LocaleEnSz
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnSz extends LocaleEn
{
    public function territory()
    {
        return new TerritorySz();
    }
}
