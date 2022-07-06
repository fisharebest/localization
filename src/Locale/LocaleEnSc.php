<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySc;

/**
 * Class LocaleEnSc
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnSc extends LocaleEn
{
    public function territory()
    {
        return new TerritorySc();
    }
}
