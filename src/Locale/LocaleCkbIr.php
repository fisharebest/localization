<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIr;

/**
 * Class LocaleCkbIr - Sorani
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleCkbIr extends LocaleCkb
{
    public function territory()
    {
        return new TerritoryIr();
    }
}
