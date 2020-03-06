<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory FR - France.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritoryFr extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'FR';
    }
}
