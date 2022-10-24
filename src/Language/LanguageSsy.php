<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryEr;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageSsy - Representation of the Saho language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageSsy extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ssy';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryEr();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}
