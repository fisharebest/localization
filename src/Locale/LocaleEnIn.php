<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIn;

/**
 * Class LocaleEnIn
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnIn extends LocaleEn
{
    protected function digitsGroup()
    {
        return 2;
    }

    public function territory()
    {
        return new TerritoryIn();
    }
}
