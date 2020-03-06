<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory VN - Viet Nam.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritoryVn extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'VN';
    }
}
