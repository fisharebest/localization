<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMp;

/**
 * Class LocaleEnMp
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnMp extends LocaleEn
{
    public function territory()
    {
        return new TerritoryMp();
    }
}
