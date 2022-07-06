<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCw;

/**
 * Class LocaleNlCw
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleNlCw extends LocaleNl
{
    public function territory()
    {
        return new TerritoryCw();
    }
}
