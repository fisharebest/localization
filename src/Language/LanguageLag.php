<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\PluralRule\PluralRuleZeroOneOther;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryTz;

/**
 * Class LanguageLag - Representation of the Langi language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageLag extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'lag';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryTz();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRuleZeroOneOther();
    }
}
