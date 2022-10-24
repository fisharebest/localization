<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryTz;

/**
 * Class LanguageRof - Representation of the Rombo language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageRof extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'rof';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryTz();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}
