<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory ZW - Zimbabwe.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritoryZw extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'ZW';
    }

    public function firstDay()
    {
        return 0;
    }
}
