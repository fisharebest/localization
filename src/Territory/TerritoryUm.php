<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory UM - United States Minor Outlying Islands.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritoryUm extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'UM';
    }

    public function firstDay()
    {
        return 0;
    }
}
