<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCa;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleFrCa - Canadian French
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFrCa extends LocaleFr
{
    public function endonym(): string
    {
        return 'français canadien';
    }

    public function endonymSortable(): string
    {
        return 'FRANCAIS CANADIEN';
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    public function territory(): TerritoryInterface
    {
        return new TerritoryCa();
    }
}
