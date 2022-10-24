<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCu;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEsCu
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEsCu extends LocaleEs
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryCu();
    }
}
