<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCk;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEnCk
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEnCk extends LocaleEn
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryCk();
    }
}
