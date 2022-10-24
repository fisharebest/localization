<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\PluralRule\PluralRuleManx;
use Fisharebest\Localization\Territory\TerritoryIm;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageGv - Representation of the Manx language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageGv extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'gv';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryIm();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRuleManx();
    }
}
