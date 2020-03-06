<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryIt;

/**
 * Class LanguageIt - Representation of the Italian language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguageIt extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'it';
    }

    public function defaultTerritory()
    {
        return new TerritoryIt();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
