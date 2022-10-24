<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule10;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryDe;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageDsb - Representation of the Lower Sorbian language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageDsb extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'dsb';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryDe();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule10();
    }
}
