<?php

declare(strict_types=1);

namespace Fisharebest\Localization\PluralRule;

use RangeException;

/**
 * Class PluralRule11 - Select a plural form for a specified number.
 * Families:
 * Celtic (Irish Gaelic)
 * nplurals=5; plural=n==1 ? 0 : n==2 ? 1 : (n>2 && n<7) ? 2 :(n>6 && n<11) ? 3 : 4;
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class PluralRule11 implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 5;
    }

    public function plural(int $number): int
    {
        if ($number < 0) {
            throw new RangeException('Negative plurals are undefined.');
        }

        if ($number === 1) {
            return 0;
        }

        if ($number === 2) {
            return 1;
        }

        if ($number > 2 && $number < 7) {
            return 2;
        }

        if ($number > 6 && $number < 11) {
            return 3;
        }

        return 4;
    }
}
