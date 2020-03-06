<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAz;

/**
 * Class LocaleAzCyrlAz
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleAzCyrlAz extends LocaleAzCyrl
{
    public function territory()
    {
        return new TerritoryAz();
    }
}
