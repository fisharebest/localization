<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBr;

/**
 * Class LocaleEsBr
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEsBr extends LocaleEs
{
    public function territory()
    {
        return new TerritoryBr();
    }
}
