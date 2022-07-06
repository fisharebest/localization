<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory HN - Honduras.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class TerritoryHn extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'HN';
    }

    public function firstDay()
    {
        return 0;
    }
}
