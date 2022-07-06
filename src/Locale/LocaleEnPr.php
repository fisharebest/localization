<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPr;

/**
 * Class LocaleEnPr
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnPr extends LocaleEn
{
    public function territory()
    {
        return new TerritoryPr();
    }
}
