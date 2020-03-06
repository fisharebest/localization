<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryDj;

/**
 * Class LocaleAaDj
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleAaDj extends LocaleAa
{
    public function territory()
    {
        return new TerritoryDj();
    }
}
