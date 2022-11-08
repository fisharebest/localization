<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptCakm;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Territory\TerritoryBd;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageCcp - Representation of the Chakma language.
 *
 * @TODO          Plural rules
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageCcp extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ccp';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryBd();
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptCakm();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule0();
    }
}
