<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySl;

/**
 * Class LocaleEnSl
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnSl extends LocaleEn
{
    public function territory()
    {
        return new TerritorySl();
    }
}
