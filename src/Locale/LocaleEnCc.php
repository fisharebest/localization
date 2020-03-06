<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCc;

/**
 * Class LocaleEnCc
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnCc extends LocaleEn
{
    public function territory()
    {
        return new TerritoryCc();
    }
}
