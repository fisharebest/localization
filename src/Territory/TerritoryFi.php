<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory FI - Finland.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritoryFi extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'FI';
    }
}
