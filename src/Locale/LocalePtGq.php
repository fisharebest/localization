<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGq;

/**
 * Class LocalePtGq
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocalePtGq extends LocalePt
{
    public function territory()
    {
        return new TerritoryGq();
    }
}
