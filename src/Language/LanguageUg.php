<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Territory\TerritoryCn;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageUg - Representation of the Uighur language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageUg extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ug';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptArab();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryCn();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}
