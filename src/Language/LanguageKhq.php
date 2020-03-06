<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\Territory\TerritoryMl;

/**
 * Class LanguageKhq - Representation of the Koyra Chiini Songhay language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LanguageKhq extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'khq';
    }

    public function defaultTerritory()
    {
        return new TerritoryMl();
    }
}
