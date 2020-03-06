<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory KH - Cambodia.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritoryKh extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'KH';
    }

    public function firstDay()
    {
        return 0;
    }
}
