<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPw;

/**
 * Class LocaleEnPw
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnPw extends LocaleEn
{
    public function territory()
    {
        return new TerritoryPw();
    }
}
