<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Territory\TerritoryDz;

/**
 * Class LanguageKab - Representation of the Kabyle language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LanguageKab extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'kab';
    }

    public function defaultTerritory()
    {
        return new TerritoryDz();
    }

    public function pluralRule()
    {
        return new PluralRule2();
    }
}
