<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule9;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryPl;

/**
 * Class LanguagePl - Representation of the Polish language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguagePl extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'pl';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryPl();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule9();
    }
}
