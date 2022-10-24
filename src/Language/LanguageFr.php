<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryFr;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageFr - Representation of the French language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageFr extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'fr';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryFr();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule2();
    }
}
