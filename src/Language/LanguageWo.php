<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritorySn;

/**
 * Class LanguageWo - Representation of the Wolof language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageWo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'wo';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritorySn();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule0();
    }
}
