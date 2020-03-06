<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory JM - Jamaica.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritoryJm extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'JM';
    }

    public function firstDay()
    {
        return 0;
    }
}
