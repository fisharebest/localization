<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryCm;

/**
 * Class LanguageDua - Representation of the Duala language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguageDua extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'dua';
    }

    public function defaultTerritory()
    {
        return new TerritoryCm();
    }
}
