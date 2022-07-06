<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory FK - Falkland Islands (Malvinas).
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class TerritoryFk extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'FK';
    }
}
