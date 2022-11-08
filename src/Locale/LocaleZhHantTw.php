<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryTw;

/**
 * Class LocaleZhHantTw
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleZhHantTw extends LocaleZhHant
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryTw();
    }
}
