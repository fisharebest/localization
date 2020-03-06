<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SO - Somalia.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritorySo extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'SO';
    }

    public function firstDay()
    {
        return 6;
    }
}
