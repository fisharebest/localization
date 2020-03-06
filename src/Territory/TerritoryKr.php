<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory KR - Republic of Korea.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritoryKr extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'KR';
    }

    public function firstDay()
    {
        return 0;
    }
}
