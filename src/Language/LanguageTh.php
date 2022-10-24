<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Script\ScriptThai;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryTh;

/**
 * Class LanguageTh - Representation of the Thai language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageTh extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'th';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptThai();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryTh();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule0();
    }
}
