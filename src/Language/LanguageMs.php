<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Territory\TerritoryMy;

/**
 * Class LanguageMs - Representation of the Malay language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguageMs extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ms';
    }

    public function defaultTerritory()
    {
        return new TerritoryMy();
    }

    public function pluralRule()
    {
        return new PluralRule0();
    }
}
