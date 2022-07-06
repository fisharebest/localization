<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory MH - Marshall Islands.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class TerritoryMh extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'MH';
    }

    public function firstDay()
    {
        return 0;
    }
}
