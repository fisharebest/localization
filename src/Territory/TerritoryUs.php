<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory US - United States.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class TerritoryUs extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'US';
    }

    public function firstDay(): int
    {
        return 0;
    }

    public function measurementSystem(): string
    {
        return 'US';
    }

    public function paperSize(): string
    {
        return 'US-Letter';
    }
}
