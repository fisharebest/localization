<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SH - Saint Helena, Ascension and Tristan da Cunha.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class TerritorySh extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'SH';
    }
}
