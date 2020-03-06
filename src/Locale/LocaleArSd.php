<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySd;

/**
 * Class LocaleArSd
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleArSd extends LocaleAr
{
    public function territory()
    {
        return new TerritorySd();
    }
}
