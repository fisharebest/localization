<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryDk;

/**
 * Class LanguageDa - Representation of the Danish language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LanguageDa extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'da';
    }

    public function defaultTerritory()
    {
        return new TerritoryDk();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
