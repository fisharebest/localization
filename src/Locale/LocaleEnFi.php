<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryFi;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEnFi - English
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEnFi extends LocaleEn
{
    public function numberSymbols(): array
    {
        return [
            self::GROUP => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }

    public function territory(): TerritoryInterface
    {
        return new TerritoryFi();
    }
}
