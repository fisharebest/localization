<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SV - El Salvador.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class TerritorySv extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SV';
    }

    public function firstDay(): int
    {
        return 0;
    }

    public function paperSize(): string
    {
        return 'US-Letter';
    }
}
