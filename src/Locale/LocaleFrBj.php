<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBj;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleFrBj
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFrBj extends LocaleFr
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryBj();
    }
}
