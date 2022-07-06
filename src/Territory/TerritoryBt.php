<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory BT - Bhutan.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class TerritoryBt extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'BT';
    }

    public function firstDay()
    {
        return 0;
    }
}
