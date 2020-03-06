<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryDe;

/**
 * Class LanguageDe - Representation of the German language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguageDe extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'de';
    }

    public function defaultTerritory()
    {
        return new TerritoryDe();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
