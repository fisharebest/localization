<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryFr;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleCaFr
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleCaFr extends LocaleCa
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryFr();
    }
}
