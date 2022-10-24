<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Script\ScriptLaoo;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryLa;

/**
 * Class LanguageLo - Representation of the Lao language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageLo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'lo';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptLaoo();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryLa();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule0();
    }
}
