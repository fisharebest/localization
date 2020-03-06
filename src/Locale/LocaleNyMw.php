<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMw;

/**
 * Class LocaleNyMw
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleNyMw extends LocaleNy
{
    public function territory()
    {
        return new TerritoryMw();
    }
}
