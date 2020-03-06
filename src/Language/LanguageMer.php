<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LanguageMer - Representation of the Meru language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguageMer extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'mer';
    }

    public function defaultTerritory()
    {
        return new TerritoryKe();
    }
}
