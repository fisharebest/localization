<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SM - San Marino.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class TerritorySm extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'SM';
    }
}
