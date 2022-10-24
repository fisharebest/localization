<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptHans;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Territory\TerritoryCn;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageYue - Representation of the Chinese language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageYue extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'yue';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryCn();
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptHans();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule0();
    }
}
