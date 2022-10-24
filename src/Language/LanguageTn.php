<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryBw;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageTn - Representation of the Tswana language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageTn extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'tn';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryBw();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}
