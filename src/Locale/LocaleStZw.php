<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryZw;

/**
 * Class LocaleStZw
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleStZw extends LocaleSt
{
    public function territory()
    {
        return new TerritoryZw();
    }
}
