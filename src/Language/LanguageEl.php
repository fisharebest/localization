<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptGrek;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Territory\TerritoryGr;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageEl - Representation of the Modern Greek (1453-) language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageEl extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'el';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptGrek();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryGr();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}
