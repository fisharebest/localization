<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryEs;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleOcEs - Occitan
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleOcEs extends LocaleOc
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryEs();
    }
}
