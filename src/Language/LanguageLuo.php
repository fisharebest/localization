<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LanguageLuo - Representation of the Luo (Kenya and Tanzania) language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LanguageLuo extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'luo';
    }

    public function defaultTerritory()
    {
        return new TerritoryKe();
    }
}
