<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Script\ScriptKnda;
use Fisharebest\Localization\Territory\TerritoryIn;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageKn - Representation of the Kannada language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageKn extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'kn';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptKnda();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryIn();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule2();
    }
}
