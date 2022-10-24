<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleCentralAtlasTamazight;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryMa;

/**
 * Class LanguageTzm - Representation of the Central Atlas Tamazight language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageTzm extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'tzm';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryMa();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRuleCentralAtlasTamazight();
    }
}
