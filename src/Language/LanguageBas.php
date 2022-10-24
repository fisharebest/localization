<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryCm;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageBas - Representation of the Basa (Cameroon) language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageBas extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'bas';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryCm();
    }
}
