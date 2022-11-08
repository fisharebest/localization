<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryMy;

/**
 * Class LocaleTaMy
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleTaMy extends LocaleTa
{
    protected function digitsGroup(): int
    {
        return 3;
    }

    public function territory(): TerritoryInterface
    {
        return new TerritoryMy();
    }
}
