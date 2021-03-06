<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory EZ - Eurozone.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritoryEz extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'EZ';
    }
}
