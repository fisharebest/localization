<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LanguageSaq - Representation of the Samburu language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguageSaq extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'saq';
    }

    public function defaultTerritory()
    {
        return new TerritoryKe();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
