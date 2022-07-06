<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory CP - Clipperton Island.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class TerritoryCp extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'CP';
    }
}
