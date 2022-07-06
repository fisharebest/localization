<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Territory\TerritoryNz;

/**
 * Class LanguageEn - Representation of the Maori language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageMi extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'mi';
    }

    public function defaultTerritory()
    {
        return new TerritoryNz();
    }

    public function pluralRule()
    {
        return new PluralRule2();
    }
}
