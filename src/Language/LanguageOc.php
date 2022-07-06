<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Territory\TerritoryFr;

/**
 * Class LanguageOc - Representation of the Occitan language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LanguageOc extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'oc';
    }

    public function defaultTerritory()
    {
        return new TerritoryFr();
    }

    public function pluralRule()
    {
        return new PluralRule2();
    }
}
