<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryEt;

/**
 * Class LocaleSoEt
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleSoEt extends LocaleSo
{
    public function territory()
    {
        return new TerritoryEt();
    }
}
