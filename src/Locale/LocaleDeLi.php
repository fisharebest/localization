<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryLi;

/**
 * Class LocaleDeLi
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleDeLi extends LocaleDe
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryLi();
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
}
