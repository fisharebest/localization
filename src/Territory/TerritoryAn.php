<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory AN - Netherlands Antilles.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class TerritoryAn extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'AN';
    }
}
