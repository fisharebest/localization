<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptBeng;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Territory\TerritoryBd;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageBn - Representation of the Bengali language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageBn extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'bn';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptBeng();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryBd();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule2();
    }
}
