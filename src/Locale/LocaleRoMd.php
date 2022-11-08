<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryMd;

/**
 * Class LocaleRoMd - Moldavian
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleRoMd extends LocaleRo
{
    public function endonym(): string
    {
        return 'moldovenească';
    }

    public function endonymSortable(): string
    {
        return 'MOLDOVENEASCA';
    }

    public function territory(): TerritoryInterface
    {
        return new TerritoryMd();
    }
}
