<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryEe;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageEt - Representation of the Estonian language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageEt extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'et';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryEe();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}
