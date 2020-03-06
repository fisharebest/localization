<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryDo;

/**
 * Class LocaleEsDo
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleEsDo extends LocaleEs
{
    public function territory()
    {
        return new TerritoryDo();
    }
}
