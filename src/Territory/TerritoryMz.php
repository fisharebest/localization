<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory MZ - Mozambique.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritoryMz extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'MZ';
    }

    public function firstDay()
    {
        return 0;
    }
}
