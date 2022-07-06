<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryFr;

/**
 * Class LocaleCaFr
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleCaFr extends LocaleCa
{
    public function territory()
    {
        return new TerritoryFr();
    }
}
