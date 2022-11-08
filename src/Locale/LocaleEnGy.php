<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGy;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEnGy
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEnGy extends LocaleEn
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryGy();
    }
}
