<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

/**
 * Class LocalePtPt - European Portuguese
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LocalePtPt extends LocalePt
{
    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
