<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleCornish;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryGb;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageKw - Representation of the Cornish language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageKw extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'kw';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryGb();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRuleCornish();
    }
}
