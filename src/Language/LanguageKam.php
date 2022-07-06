<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LanguageKam - Representation of the Kamba (Kenya) language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LanguageKam extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'kam';
    }

    public function defaultTerritory()
    {
        return new TerritoryKe();
    }
}
