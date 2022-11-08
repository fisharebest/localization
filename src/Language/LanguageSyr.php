<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Script\ScriptSyrc;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryIq;

/**
 * Class LanguageSyr - Representation of the Syriac language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageSyr extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'syr';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptSyrc();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryIq();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}
