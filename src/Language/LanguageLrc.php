<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule12;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryIr;

/**
 * Class LanguageLrc - Representation of the Luri language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageLrc extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'lrc';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptArab();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryIr();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule12();
    }
}
