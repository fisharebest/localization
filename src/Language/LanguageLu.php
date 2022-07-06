<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryCd;

/**
 * Class LanguageLu - Representation of the Luba-Katanga language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LanguageLu extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'lu';
    }

    public function defaultTerritory()
    {
        return new TerritoryCd();
    }
}
