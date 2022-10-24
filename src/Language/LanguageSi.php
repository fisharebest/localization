<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Script\ScriptSinh;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryLk;

/**
 * Class LanguageSi - Representation of the Sinhala language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageSi extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'si';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptSinh();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryLk();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule2();
    }
}
