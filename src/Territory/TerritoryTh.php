<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory TH - Thailand.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class TerritoryTh extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'TH';
    }

    public function firstDay()
    {
        return 0;
    }
}
