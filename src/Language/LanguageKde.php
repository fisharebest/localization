<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryTz;

/**
 * Class LanguageKde - Representation of the Makonde language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageKde extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'kde';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryTz();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule0();
    }
}
