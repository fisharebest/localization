<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCl;

/**
 * Class LocaleEsCl
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEsCl extends LocaleEs
{
    public function territory()
    {
        return new TerritoryCl();
    }
}
