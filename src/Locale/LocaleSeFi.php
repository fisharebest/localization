<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryFi;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleSeFi
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleSeFi extends LocaleSe
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryFi();
    }
}
