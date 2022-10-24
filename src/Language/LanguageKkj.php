<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryCm;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageKkj - Representation of the Kako language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageKkj extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'kkj';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryCm();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}
