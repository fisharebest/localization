<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCa;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEnCa - Canadian English
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEnCa extends LocaleEn
{
    public function endonym(): string
    {
        return 'Canadian English';
    }

    public function endonymSortable(): string
    {
        return 'ENGLISH, CANADIAN';
    }

    public function territory(): TerritoryInterface
    {
        return new TerritoryCa();
    }
}
