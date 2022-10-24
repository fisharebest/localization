<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryDz;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageKab - Representation of the Kabyle language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageKab extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'kab';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryDz();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule2();
    }
}
