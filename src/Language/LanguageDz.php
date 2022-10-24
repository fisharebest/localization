<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Script\ScriptTibt;
use Fisharebest\Localization\Territory\TerritoryBt;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageDz - Representation of the Dzongkha language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageDz extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'dz';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptTibt();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryBt();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule0();
    }
}
