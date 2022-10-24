<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryCh;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageGsw - Representation of the Swiss German language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageGsw extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'gsw';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryCh();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}
