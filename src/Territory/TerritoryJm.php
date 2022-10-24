<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory JM - Jamaica.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class TerritoryJm extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'JM';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
