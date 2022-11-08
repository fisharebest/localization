<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory DJ - Djibouti.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class TerritoryDj extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'DJ';
    }

    public function firstDay(): int
    {
        return 6;
    }
}
