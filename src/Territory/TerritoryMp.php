<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory MP - Northern Mariana Islands.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class TerritoryMp extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'MP';
    }

    public function firstDay()
    {
        return 0;
    }
}
