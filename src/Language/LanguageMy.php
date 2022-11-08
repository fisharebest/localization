<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Script\ScriptMymr;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryMm;

/**
 * Class LanguageMy - Representation of the Burmese language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageMy extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'my';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptMymr();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryMm();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule0();
    }
}
