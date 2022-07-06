<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryLr;

/**
 * Class LocaleEnLr
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnLr extends LocaleEn
{
    public function territory()
    {
        return new TerritoryLr();
    }
}
