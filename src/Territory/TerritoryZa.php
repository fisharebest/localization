<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory ZA - South Africa.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritoryZa extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'ZA';
    }

    public function firstDay()
    {
        return 0;
    }
}
