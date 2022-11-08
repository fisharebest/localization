<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\PluralRule\PluralRuleOneTwoOther;
use Fisharebest\Localization\Script\ScriptCans;
use Fisharebest\Localization\Script\ScriptInterface;
use Fisharebest\Localization\Territory\TerritoryCa;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageIu - Representation of the Inuktitut language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageIu extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'iu';
    }

    public function defaultScript(): ScriptInterface
    {
        return new ScriptCans();
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryCa();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRuleOneTwoOther();
    }
}
