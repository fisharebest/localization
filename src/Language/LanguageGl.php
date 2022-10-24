<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryEs;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageGl - Representation of the Galician language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageGl extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'gl';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryEs();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}
