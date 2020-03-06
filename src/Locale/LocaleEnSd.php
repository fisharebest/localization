<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySd;

/**
 * Class LocaleEnSd
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnSd extends LocaleEn
{
    public function territory()
    {
        return new TerritorySd();
    }
}
