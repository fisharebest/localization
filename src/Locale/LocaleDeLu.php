<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryLu;

/**
 * Class LocaleDeLu
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleDeLu extends LocaleDe
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryLu();
    }
}
