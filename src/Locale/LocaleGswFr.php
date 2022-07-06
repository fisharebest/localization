<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryFr;

/**
 * Class LocaleGswFr
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleGswFr extends LocaleGsw
{
    public function territory()
    {
        return new TerritoryFr();
    }
}
