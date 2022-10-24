<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\PluralRule\PluralRuleWelsh;
use Fisharebest\Localization\Territory\TerritoryGb;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageCy - Representation of the Welsh language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageCy extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'cy';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryGb();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRuleWelsh();
    }
}
