<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAo;

/**
 * Class LocalePtAo
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocalePtAo extends LocalePt
{
    public function territory()
    {
        return new TerritoryAo();
    }
}
