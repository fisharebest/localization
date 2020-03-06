<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMz;

/**
 * Class LocalePtMz
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocalePtMz extends LocalePt
{
    public function territory()
    {
        return new TerritoryMz();
    }
}
