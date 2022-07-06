<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGe;

/**
 * Class LocaleOsGe
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleOsGe extends LocaleOs
{
    public function territory()
    {
        return new TerritoryGe();
    }
}
