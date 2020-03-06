<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryCm;

/**
 * Class LanguageYav - Representation of the Yangben language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguageYav extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'yav';
    }

    public function defaultTerritory()
    {
        return new TerritoryCm();
    }
}
