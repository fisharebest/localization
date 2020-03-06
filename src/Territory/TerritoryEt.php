<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory ET - Ethiopia.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritoryEt extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'ET';
    }

    public function firstDay()
    {
        return 0;
    }
}
