<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySb;

/**
 * Class LocaleEnSb
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnSb extends LocaleEn
{
    public function territory()
    {
        return new TerritorySb();
    }
}
