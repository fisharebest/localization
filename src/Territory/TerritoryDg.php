<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory DG - Diego Garcia.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class TerritoryDg extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'DG';
    }
}
