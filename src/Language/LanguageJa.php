<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Script\ScriptJpan;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryJp;

/**
 * Class LanguageJa - Representation of the Japanese language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageJa extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ja';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptJpan();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryJp();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule0();
    }
}
