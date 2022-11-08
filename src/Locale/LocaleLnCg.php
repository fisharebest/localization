<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCg;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleLnCg
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleLnCg extends LocaleLn
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryCg();
    }
}
