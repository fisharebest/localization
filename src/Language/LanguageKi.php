<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LanguageKi - Representation of the Kikuyu language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LanguageKi extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ki';
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
