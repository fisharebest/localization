<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryHu;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageHu - Representation of the Hungarian language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageHu extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'hu';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryHu();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}
