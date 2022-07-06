<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory GB - United Kingdom.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class TerritoryGb extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'GB';
    }

    public function measurementSystem()
    {
        return 'UK';
    }
}
