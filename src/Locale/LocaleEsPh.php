<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPh;

/**
 * Class LocaleEsPh
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEsPh extends LocaleEs
{
    public function territory()
    {
        return new TerritoryPh();
    }
}
