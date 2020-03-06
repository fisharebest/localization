<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory TW - Taiwan, Province of China.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritoryTw extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'TW';
    }

    public function firstDay()
    {
        return 0;
    }
}
