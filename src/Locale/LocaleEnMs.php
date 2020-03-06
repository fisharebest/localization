<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMs;

/**
 * Class LocaleEnMs
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnMs extends LocaleEn
{
    public function territory()
    {
        return new TerritoryMs();
    }
}
