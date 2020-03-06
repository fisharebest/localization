<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryEr;

/**
 * Class LocaleTiEr
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleTiEr extends LocaleTi
{
    public function territory()
    {
        return new TerritoryEr();
    }
}
