<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryMx;

/**
 * Class LocaleEsMx - Mexican Spanish
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEsMx extends LocaleEs
{
    public function endonym(): string
    {
        return 'español de México';
    }

    public function endonymSortable(): string
    {
        return 'ESPANOL DE MEXICO';
    }

    public function percentFormat(): string
    {
        return self::PLACEHOLDER . self::PERCENT;
    }

    public function territory(): TerritoryInterface
    {
        return new TerritoryMx();
    }
}
