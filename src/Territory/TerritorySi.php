<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SI - Slovenia.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class TerritorySi extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SI';
    }
}
