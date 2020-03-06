<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SZ - Swaziland.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritorySz extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'SZ';
    }
}
