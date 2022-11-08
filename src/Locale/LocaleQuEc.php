<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryEc;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleQuEc
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleQuEc extends LocaleQu
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryEc();
    }
}
