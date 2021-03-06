<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule11;
use Fisharebest\Localization\Territory\TerritoryIe;

/**
 * Class LanguageGa - Representation of the Irish language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguageGa extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ga';
    }

    public function defaultTerritory()
    {
        return new TerritoryIe();
    }

    public function pluralRule()
    {
        return new PluralRule11();
    }
}
