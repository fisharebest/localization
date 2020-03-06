<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBe;

/**
 * Class LocaleDeBe
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2020 Greg Roach
 * @license   GPLv3+
 */
class LocaleDeBe extends LocaleDe
{
    public function territory()
    {
        return new TerritoryBe();
    }
}
