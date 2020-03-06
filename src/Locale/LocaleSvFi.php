<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryFi;

/**
 * Class LocaleSvFi
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleSvFi extends LocaleSv
{
    public function territory()
    {
        return new TerritoryFi();
    }
}
