<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAw;

/**
 * Class LocaleNlAw
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleNlAw extends LocaleNl
{
    public function territory()
    {
        return new TerritoryAw();
    }
}
