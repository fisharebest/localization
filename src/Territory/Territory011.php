<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 011 - Western Africa.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class Territory011 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '011';
    }
}
