<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKn;

/**
 * Class LocaleEnKn
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnKn extends LocaleEn
{
    public function territory()
    {
        return new TerritoryKn();
    }
}
