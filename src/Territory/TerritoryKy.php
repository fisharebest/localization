<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory KY - Cayman Islands.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritoryKy extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'KY';
    }

    public function measurementSystem()
    {
        return 'US';
    }
}
