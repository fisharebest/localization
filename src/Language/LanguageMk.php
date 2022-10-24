<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule15;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryMk;

/**
 * Class LanguageMk - Representation of the Macedonian language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageMk extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'mk';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryMk();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule15();
    }
}
