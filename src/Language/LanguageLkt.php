<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryUs;

/**
 * Class LanguageLkt - Representation of the Lakota language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageLkt extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'lkt';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryUs();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule0();
    }
}
