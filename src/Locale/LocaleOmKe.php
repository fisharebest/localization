<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LocaleOmKe
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleOmKe extends LocaleOm
{
    public function territory()
    {
        return new TerritoryKe();
    }
}
