<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryNo;

/**
 * Class LanguageSe - Representation of the Northern Sami language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LanguageSe extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'se';
    }

    public function defaultTerritory()
    {
        return new TerritoryNo();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
