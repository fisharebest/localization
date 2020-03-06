<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryCm;

/**
 * Class LanguageMua - Representation of the Mundang language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguageMua extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'mua';
    }

    public function defaultTerritory()
    {
        return new TerritoryCm();
    }
}
