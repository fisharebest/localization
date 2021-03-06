<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory PT - Portugal.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritoryPt extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'PT';
    }

    /**
     * @return int
     */
    public function firstDay()
    {
        return 0;
    }
}
