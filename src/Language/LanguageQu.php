<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryPe;

/**
 * Class LanguageQu - Representation of the Quechua language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageQu extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'qu';
    }

    public function defaultTerritory()
    {
        return new TerritoryPe();
    }
}
