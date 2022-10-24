<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryEs;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageEs - Representation of the Spanish language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageEs extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'es';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryEs();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}
