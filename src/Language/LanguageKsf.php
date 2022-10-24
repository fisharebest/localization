<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryCm;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageKsf - Representation of the Bafia language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageKsf extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ksf';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryCm();
    }
}
