<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory DJ - Djibouti.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritoryDj extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'DJ';
    }

    public function firstDay()
    {
        return 6;
    }
}
