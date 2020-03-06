<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySs;

/**
 * Class LocaleArSs
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleArSs extends LocaleAr
{
    public function territory()
    {
        return new TerritorySs();
    }
}
