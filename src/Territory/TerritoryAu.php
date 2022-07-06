<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory AU - Australia.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class TerritoryAu extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'AU';
    }

    public function firstDay()
    {
        return 0;
    }
}
