<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySr;

/**
 * Class LocaleNlSr
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleNlSr extends LocaleNl
{
    public function territory()
    {
        return new TerritorySr();
    }
}
