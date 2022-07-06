<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySx;

/**
 * Class LocaleNlSx
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleNlSx extends LocaleNl
{
    public function territory()
    {
        return new TerritorySx();
    }
}
