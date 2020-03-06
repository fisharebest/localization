<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory MV - Maldives.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritoryMv extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'MV';
    }

    public function firstDay()
    {
        return 5;
    }
}
