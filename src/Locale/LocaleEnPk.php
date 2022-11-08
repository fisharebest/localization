<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryPk;

/**
 * Class LocaleEnPk
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEnPk extends LocaleEn
{
    protected function digitsGroup(): int
    {
        return 2;
    }

    public function territory(): TerritoryInterface
    {
        return new TerritoryPk();
    }
}
