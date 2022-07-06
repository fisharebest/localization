<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryJe;

/**
 * Class LocaleEnJe
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnJe extends LocaleEn
{
    public function territory()
    {
        return new TerritoryJe();
    }
}
