<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory BD - Bangladesh.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class TerritoryBd extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'BD';
    }

    public function firstDay()
    {
        return 0;
    }
}
