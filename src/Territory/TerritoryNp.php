<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory NP - Nepal.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritoryNp extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'NP';
    }

    public function firstDay()
    {
        return 0;
    }
}
