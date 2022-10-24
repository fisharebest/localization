<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory VE - Venezuela.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class TerritoryVe extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'VE';
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
