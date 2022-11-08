<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGb;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEnGb - British English
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEnGb extends LocaleEn
{
    public function endonym(): string
    {
        return 'British English';
    }

    public function endonymSortable(): string
    {
        return 'ENGLISH, BRITISH';
    }

    public function territory(): TerritoryInterface
    {
        return new TerritoryGb();
    }
}
