<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryCd;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageSwc - Representation of the Congo Swahili language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageSwc extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'swc';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryCd();
    }
}
