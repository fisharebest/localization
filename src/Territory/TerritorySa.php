<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SA - Saudi Arabia.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class TerritorySa extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SA';
    }

    public function firstDay(): int
    {
        return 0;
    }

    public function weekendStart(): int
    {
        return 5;
    }

    public function weekendEnd(): int
    {
        return 6;
    }
}
