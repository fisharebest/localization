<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory AG - Antigua and Barbuda.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class TerritoryAg extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'AG';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
