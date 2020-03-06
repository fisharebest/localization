<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory LA - Lao People's Democratic Republic.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritoryLa extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'LA';
    }

    public function firstDay()
    {
        return 0;
    }
}
