<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCh;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleFrCh - Swiss French
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleFrCh extends LocaleFr
{
    public function endonym(): string
    {
        return 'français suisse';
    }

    public function endonymSortable(): string
    {
        return 'FRANCAIS SUISSE';
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::PERCENT;
    }

    public function territory(): TerritoryInterface
    {
        return new TerritoryCh();
    }
}
