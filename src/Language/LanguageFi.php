<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryFi;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LanguageFi - Representation of the Finnish language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageFi extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'fi';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryFi();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule1();
    }
}
