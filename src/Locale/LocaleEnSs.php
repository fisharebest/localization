<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySs;

/**
 * Class LocaleEnSs
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnSs extends LocaleEn
{
    public function territory()
    {
        return new TerritorySs();
    }
}
