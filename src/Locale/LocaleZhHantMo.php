<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMo;

/**
 * Class LocaleZhHantMo
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleZhHantMo extends LocaleZhHant
{
    public function territory()
    {
        return new TerritoryMo();
    }
}
