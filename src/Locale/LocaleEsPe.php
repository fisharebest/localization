<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPe;

/**
 * Class LocaleEsPe
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEsPe extends LocaleEs
{
    public function territory()
    {
        return new TerritoryPe();
    }
}
