<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SD - Sudan.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class TerritorySd extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SD';
    }

    public function firstDay(): int
    {
        return 6;
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
