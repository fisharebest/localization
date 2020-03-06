<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory US - United States.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritoryUs extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'US';
    }

    public function firstDay()
    {
        return 0;
    }

    public function measurementSystem()
    {
        return 'US';
    }

    public function paperSize()
    {
        return 'US-Letter';
    }
}
