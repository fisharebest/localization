<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTo;

/**
 * Class LocaleEnTo
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnTo extends LocaleEn
{
    public function territory()
    {
        return new TerritoryTo();
    }
}
