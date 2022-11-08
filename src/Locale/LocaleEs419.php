<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\Territory419;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleEs419 - Latin American Spanish
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocaleEs419 extends LocaleEs
{
    public function endonym(): string
    {
        return 'español latinoamericano';
    }

    public function endonymSortable(): string
    {
        return 'ESPANOL LATINOAMERICANO';
    }

    public function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::COMMA,
            self::DECIMAL => self::DOT,
        );
    }

    public function territory(): TerritoryInterface
    {
        return new Territory419();
    }
}
