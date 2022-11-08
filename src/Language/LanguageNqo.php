<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Script\ScriptNkoo;
use Fisharebest\Localization\Territory\TerritoryGn;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageNqo - Representation of the N’Ko language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageNqo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'nqo';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptNkoo();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryGn();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule0();
    }
}
