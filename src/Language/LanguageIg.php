<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Territory\TerritoryNg;

/**
 * Class LanguageIg - Representation of the Igbo language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageIg extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ig';
    }

    public function defaultTerritory()
    {
        return new TerritoryNg();
    }

    public function pluralRule()
    {
        return new PluralRule0();
    }
}
