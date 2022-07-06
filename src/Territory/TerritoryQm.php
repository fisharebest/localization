<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory QM - Private use.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class TerritoryQm extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'QM';
    }
}
