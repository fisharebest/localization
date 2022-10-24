<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule5;
use Fisharebest\Localization\PluralRule\PluralRuleInterface;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryRo;

/**
 * Class LanguageRo - Representation of the Romanian language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageRo extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ro';
    }

    public function defaultTerritory(): TerritoryInterface
    {
        return new TerritoryRo();
    }

    public function pluralRule(): PluralRuleInterface
    {
        return new PluralRule5();
    }
}
