<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKp;

/**
 * Class LocaleKoKp
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleKoKp extends LocaleKo
{
    public function territory()
    {
        return new TerritoryKp();
    }
}
