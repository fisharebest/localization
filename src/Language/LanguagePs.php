<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryPk;

/**
 * Class LanguagePs - Representation of the Pushto language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguagePs extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ps';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptArab();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryPk();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}
