<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryUg;

/**
 * Class LocaleSwUg
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleSwUg extends LocaleSw
{
    public function territory()
    {
        return new TerritoryUg();
    }
}
