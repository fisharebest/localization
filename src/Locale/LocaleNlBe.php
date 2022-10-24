<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBe;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleNlBe - Flemish
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleNlBe extends LocaleNl
{
    public function endonym(): string
    {
        return 'Vlaams';
    }

    public function endonymSortable(): string
    {
        return 'VLAAMS';
    }

    public function territory(): TerritoryInterface
    {
        return new TerritoryBe();
    }
}
