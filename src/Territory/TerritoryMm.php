<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory MM - Myanmar.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class TerritoryMm extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'MM';
    }

    public function firstDay(): int
    {
        return 0;
    }

    public function measurementSystem(): string
    {
        return 'UK';
    }
}
