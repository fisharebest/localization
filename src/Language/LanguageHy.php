<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Script\ScriptArmn;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Territory\TerritoryAm;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageHy - Representation of the Armenian language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageHy extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'hy';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptArmn();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryAm();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule2();
    }
}
