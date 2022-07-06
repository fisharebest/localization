<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory WS - Samoa.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class TerritoryWs extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'WS';
    }

    public function firstDay()
    {
        return 0;
    }
}
