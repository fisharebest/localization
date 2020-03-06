<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMh;

/**
 * Class LocaleEnMh
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnMh extends LocaleEn
{
    public function territory()
    {
        return new TerritoryMh();
    }
}
