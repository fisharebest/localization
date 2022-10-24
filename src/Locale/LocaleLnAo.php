<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAo;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleLnAo
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleLnAo extends LocaleLn
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryAo();
    }
}
