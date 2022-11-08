<?php

declare(strict_types=1);

namespace Fisharebest\Localization\PluralRule;

/**
 * Class PluralRuleFilipino - Select a plural form for a specified number.
 * nplurals=2; plural=n % 10 != 4 && n%10 != 6 && n%10 != 9;
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class PluralRuleFilipino implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 2;
    }

    public function plural(int $number): int
    {
        $number = abs($number);

        if ($number % 10 === 4 || $number % 10 === 6 || $number % 10 === 9) {
            return 1;
        }

        return 0;
    }
}
