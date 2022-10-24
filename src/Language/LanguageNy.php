<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryMw;

/**
 * Class LanguageNy - Representation of the Chewa language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageNy extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ny';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryMw();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}
