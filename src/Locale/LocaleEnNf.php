<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryNf;

/**
 * Class LocaleEnNf
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnNf extends LocaleEn
{
    public function territory()
    {
        return new TerritoryNf();
    }
}
