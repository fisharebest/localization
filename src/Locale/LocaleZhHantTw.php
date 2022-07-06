<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTw;

/**
 * Class LocaleZhHantTw
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleZhHantTw extends LocaleZhHant
{
    public function territory()
    {
        return new TerritoryTw();
    }
}
