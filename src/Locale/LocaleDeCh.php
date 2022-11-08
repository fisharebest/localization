<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCh;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleDeCh - Swiss High German
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleDeCh extends LocaleDe
{
    public function endonym(): string
    {
        return 'Schweizer Hochdeutsch';
    }

    public function endonymSortable(): string
    {
        return 'SCHWEIZER HOCHDEUTSCH';
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::APOSTROPHE,
            self::DECIMAL => self::DOT,
        );
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
