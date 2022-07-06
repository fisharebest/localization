<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySs;

/**
 * Class LocaleNusSd
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleNusSs extends LocaleNus
{
    public function territory()
    {
        return new TerritorySs();
    }
}
