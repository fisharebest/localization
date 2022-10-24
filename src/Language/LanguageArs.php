<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritorySa;

/**
 * Class LanguageArs - Representation of the Najdi Arabic language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageArs extends LanguageAr
{
    public function code(): string
    {
        return 'ars';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritorySa();
    }
}
