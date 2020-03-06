<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory GR - Greece.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritoryGr extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'GR';
    }
}
