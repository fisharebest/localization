<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule7;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryHr;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageHr - Representation of the Croatian language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageHr extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'hr';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryHr();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule7();
    }
}
