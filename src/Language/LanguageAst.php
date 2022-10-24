<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryEs;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageAst - Representation of the Asturian language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageAst extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ast';
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
