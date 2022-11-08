<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCy;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleElCy
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleElCy extends LocaleEl
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryCy();
    }
}
