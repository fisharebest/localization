<?php

declare(strict_types=1);

namespace Fisharebest\Localization\PluralRule;

use RangeException;

/**
 * Class PluralRule5 - Select a plural form for a specified number.
 * Families:
 * Romanic (Romanian)
 * nplurals=3; plural=(n==1 ? 0 : (n==0 || (n%100 > 0 && n%100 < 20)) ? 1 : 2);
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class PluralRule5 implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 3;
    }

    public function plural(int $number): int
    {
        if ($number < 0) {
            throw new RangeException('Negative plurals are undefined.');
        }

        if ($number === 1) {
            return 0;
        }

        if ($number === 0 || ($number % 100 > 0 && $number % 100 < 20)) {
            return 1;
        }

        return 2;
    }
}
