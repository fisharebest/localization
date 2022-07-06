<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryBw;

/**
 * Class LanguageTn - Representation of the Tswana language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LanguageTn extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'tn';
    }

    public function defaultTerritory()
    {
        return new TerritoryBw();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}
