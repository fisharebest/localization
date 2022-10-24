<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptEthi;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Territory\TerritoryEt;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageTi - Representation of the Tigrinya language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageTi extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ti';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptEthi();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryEt();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule2();
    }
}
