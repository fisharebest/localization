<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SU - Union of Soviet Socialist Republics.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritorySu extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'SU';
    }
}
