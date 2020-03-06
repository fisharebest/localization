<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySv;

/**
 * Class LocaleEsSv
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEsSv extends LocaleEs
{
    public function territory()
    {
        return new TerritorySv();
    }
}
