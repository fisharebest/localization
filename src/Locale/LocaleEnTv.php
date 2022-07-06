<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTv;

/**
 * Class LocaleEnTv
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnTv extends LocaleEn
{
    public function territory()
    {
        return new TerritoryTv();
    }
}
