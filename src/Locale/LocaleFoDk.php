<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryDk;

/**
 * Class LocaleFoDk
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleFoDk extends LocaleFo
{
    public function territory()
    {
        return new TerritoryDk();
    }
}
