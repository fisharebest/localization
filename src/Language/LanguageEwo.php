<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryCm;

/**
 * Class LanguageEwo - Representation of the Ewondo language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LanguageEwo extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ewo';
    }

    public function defaultTerritory()
    {
        return new TerritoryCm();
    }
}
