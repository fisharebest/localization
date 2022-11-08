<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryDj;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleFrDj
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFrDj extends LocaleFr
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryDj();
    }
}
