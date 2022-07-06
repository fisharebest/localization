<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAo;

/**
 * Class LocaleLnAo
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleLnAo extends LocaleLn
{
    public function territory()
    {
        return new TerritoryAo();
    }
}
