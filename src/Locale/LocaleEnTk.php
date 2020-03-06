<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTk;

/**
 * Class LocaleEnTk
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnTk extends LocaleEn
{
    public function territory()
    {
        return new TerritoryTk();
    }
}
