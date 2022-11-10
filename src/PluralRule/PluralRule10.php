<?php

declare(strict_types=1);

namespace Fisharebest\Localization\PluralRule;

use RangeException;

/**
 * Class PluralRule10 - Select a plural form for a specified number.
 * Families:
 * Slavic (Slovenian, Sorbian)
 * nplurals=4; plural=(n%100==1 ? 1 : n%100==2 ? 2 : n%100==3 || n%100==4 ? 3 : 0);
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class PluralRule10 implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 4;
    }

    public function plural(int $number): int
    {
        if ($number < 0) {
            throw new RangeException('Negative plurals are undefined.');
        }

        if ($number % 100 === 1) {
            return 0;
        }

        if ($number % 100 === 2) {
            return 1;
        }

        if ($number % 100 === 3 || $number % 100 === 4) {
            return 2;
        }

        return 3;
    }
}
