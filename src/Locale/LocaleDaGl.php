<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGl;

/**
 * Class LocaleDaGl
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleDaGl extends LocaleDa
{
    public function territory()
    {
        return new TerritoryGl();
    }
}
