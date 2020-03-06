<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryUm;

/**
 * Class LocaleEnUm
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnUm extends LocaleEn
{
    public function territory()
    {
        return new TerritoryUm();
    }
}
