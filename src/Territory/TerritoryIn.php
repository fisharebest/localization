<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory IN - India.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class TerritoryIn extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'IN';
    }

    public function firstDay(): int
    {
        return 0;
    }

    public function weekendStart(): int
    {
        return 0;
    }

    public function weekendEnd(): int
    {
        return 1;
    }
}
