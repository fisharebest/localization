<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySa;

/**
 * Class LocaleArSa
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleArSa extends LocaleAr
{
    public function territory()
    {
        return new TerritorySa();
    }
}
