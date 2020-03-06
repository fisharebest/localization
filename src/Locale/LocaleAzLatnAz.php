<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAz;

/**
 * Class LocaleAzLatnAz
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleAzLatnAz extends LocaleAzLatn
{
    public function territory()
    {
        return new TerritoryAz();
    }
}
