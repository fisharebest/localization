<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAs;

/**
 * Class LocaleEnAs
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnAs extends LocaleEn
{
    public function territory()
    {
        return new TerritoryAs();
    }
}
