<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySj;

/**
 * Class LocaleNbSj
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleNbSj extends LocaleNb
{
    public function territory()
    {
        return new TerritorySj();
    }
}
