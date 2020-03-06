<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMo;

/**
 * Class LocaleEnMo
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnMo extends LocaleEn
{
    public function territory()
    {
        return new TerritoryMo();
    }
}
