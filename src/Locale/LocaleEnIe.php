<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIe;

/**
 * Class LocaleEnIe
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnIe extends LocaleEn
{
    public function territory()
    {
        return new TerritoryIe();
    }
}
