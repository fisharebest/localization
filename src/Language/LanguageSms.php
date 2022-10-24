<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\PluralRule\PluralRuleOneTwoOther;
use Fisharebest\Localization\Territory\TerritoryFi;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageSms - Representation of the Skolt Sami language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageSms extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'sms';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryFi();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRuleOneTwoOther();
    }
}
