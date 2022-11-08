<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBf;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleFfLatnBf - Fulah
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFfLatnBf extends LocaleFfLatn
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryBf();
    }
}
