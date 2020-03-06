<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryHk;

/**
 * Class LocaleZhHantHk
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleZhHantHk extends LocaleZhHant
{
    public function territory()
    {
        return new TerritoryHk();
    }
}
