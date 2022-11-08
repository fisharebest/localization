<?php

declare(strict_types=1);

namespace Fisharebest\Localization\PluralRule;

/**
 * Class PluralRule8 - Select a plural form for a specified number.
 * Families:
 * Slavic (Slovak, Czech)
 * nplurals=3; plural=(n==1) ? 0 : (n>=2 && n<=4) ? 1 : 2;
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class PluralRule8 implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 3;
    }

    public function plural(int $number): int
    {
        $number = abs($number);

        if ($number === 1) {
            return 0;
        }

        if ($number >= 2 && $number <= 4) {
            return 1;
        }

        return 2;
    }
}
