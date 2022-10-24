<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptDeva;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryNp;

/**
 * Class LanguageNe - Representation of the Nepali language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageNe extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ne';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptDeva();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryNp();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}
