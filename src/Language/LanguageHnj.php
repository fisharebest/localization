<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptHmng;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Territory\TerritoryCn;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageHnj - Representation of the Hmong language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageHnj extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'hnj';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptHmng();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryCn();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule0();
    }
}
