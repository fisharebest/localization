<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryFo;

/**
 * Class LanguageFo - Representation of the Faroese language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LanguageFo extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'fo';
    }

    public function defaultTerritory()
    {
        return new TerritoryFo();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
