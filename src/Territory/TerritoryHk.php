<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory HK - Hong Kong.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class TerritoryHk extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'HK';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
