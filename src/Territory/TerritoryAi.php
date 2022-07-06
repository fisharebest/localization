<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory AI - Anguilla.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class TerritoryAi extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'AI';
    }
}
