<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory MT - Malta.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class TerritoryMt extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'MT';
    }

    public function firstDay()
    {
        return 0;
    }
}
