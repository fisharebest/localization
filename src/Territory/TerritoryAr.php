<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory AR - Argentina.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class TerritoryAr extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'AR';
    }

    public function firstDay()
    {
        return 0;
    }
}
