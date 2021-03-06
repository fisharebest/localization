<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCk;

/**
 * Class LocaleEnCk
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnCk extends LocaleEn
{
    public function territory()
    {
        return new TerritoryCk();
    }
}
