<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Script\ScriptSund;
use Fisharebest\Localization\Territory\TerritoryId;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageSu - Representation of the Sotho language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageSu extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'su';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptSund();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryId();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule0();
    }
}
