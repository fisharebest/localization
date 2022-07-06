<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory BZ - Belize.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class TerritoryBz extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'BZ';
    }

    public function firstDay()
    {
        return 0;
    }

    public function measurementSystem()
    {
        return 'US';
    }

    public function paperSize()
    {
        return 'US-Letter';
    }
}
