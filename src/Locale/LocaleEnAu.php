<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAu;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEnAu - Australian English
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEnAu extends LocaleEn
{
    public function endonym(): string
    {
        return 'Australian English';
    }

    public function endonymSortable(): string
    {
        return 'ENGLISH, AUSTRALIAN';
    }

    public function territory(): TerritoryInterface
    {
        return new TerritoryAu();
    }
}
