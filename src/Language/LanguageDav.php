<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LanguageDav - Representation of the Taita language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LanguageDav extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'dav';
    }

    public function defaultTerritory()
    {
        return new TerritoryKe();
    }
}
