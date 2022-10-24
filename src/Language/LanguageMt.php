<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule13;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryMt;

/**
 * Class LanguageMt - Representation of the Maltese language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageMt extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'mt';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryMt();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule13();
    }
}
