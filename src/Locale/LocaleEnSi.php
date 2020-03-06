<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySi;

/**
 * Class LocaleEnSi - English
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnSi extends LocaleEn
{
    public function territory()
    {
        return new TerritorySi();
    }
}
