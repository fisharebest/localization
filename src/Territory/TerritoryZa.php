<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory ZA - South Africa.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class TerritoryZa extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'ZA';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
