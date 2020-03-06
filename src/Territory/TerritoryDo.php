<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory DO - Dominican Republic.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritoryDo extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'DO';
    }

    public function firstDay()
    {
        return 0;
    }
}
