<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIc;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEsIc
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEsIc extends LocaleEs
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryIc();
    }
}
