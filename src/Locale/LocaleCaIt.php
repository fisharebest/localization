<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIt;

/**
 * Class LocaleCaIt
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleCaIt extends LocaleCa
{
    public function territory()
    {
        return new TerritoryIt();
    }
}
