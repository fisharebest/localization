<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SJ - Svalbard and Jan Mayen.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritorySj extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'SJ';
    }
}
