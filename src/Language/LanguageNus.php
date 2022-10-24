<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritorySd;

/**
 * Class LanguageNus - Representation of the Nuer language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageNus extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'nus';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritorySd();
    }
}
