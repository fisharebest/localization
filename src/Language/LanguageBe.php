<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptCyrl;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Territory\TerritoryBy;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageBe - Representation of the Belarusian language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageBe extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'be';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptCyrl();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryBy();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule7();
    }
}
