<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryDm;

/**
 * Class LocaleEnDm
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnDm extends LocaleEn
{
    public function territory()
    {
        return new TerritoryDm();
    }
}
