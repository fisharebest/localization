<?php

declare(strict_types=1);

namespace Fisharebest\Localization\PluralRule;

use RangeException;

/**
 * Class PluralRuleZeroOneOther - Select a plural form for a specified number.
 * nplurals=4; plural=(n==0) ? 0 : (n==1) ? 1 : 2;
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class PluralRuleZeroOneOther implements PluralRuleInterface
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

        if ($number === 0) {
            return 0;
        }

        if ($number === 1) {
            return 1;
        }

        return 2;
    }
}
