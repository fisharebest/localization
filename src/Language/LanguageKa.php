<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptGeor;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Territory\TerritoryGe;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageKa - Representation of the Georgian language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageKa extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ka';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptGeor();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryGe();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}
