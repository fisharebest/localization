<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGw;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleFfLatnGw - Fulah
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFfLatnGw extends LocaleFfLatn
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryGw();
    }
}
