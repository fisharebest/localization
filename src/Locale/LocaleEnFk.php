<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryFk;

/**
 * Class LocaleEnFk
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnFk extends LocaleEn
{
    public function territory()
    {
        return new TerritoryFk();
    }
}
