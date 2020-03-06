<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBz;

/**
 * Class LocaleEsBz
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEsBz extends LocaleEs
{
    public function territory()
    {
        return new TerritoryBz();
    }
}
