<?php

namespace Fisharebest\Localization\PluralRule;

/**
 * Class PluralRuleTachelhit - Select a plural form for a specified number.
 * nplurals=4; plural=(n==0 || n==1) ? 0 : (n>=2 && n<=10) ? 1 : 2;
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class PluralRuleTachelhit implements PluralRuleInterface
{
    public function plurals()
    {
        return 3;
    }

    public function plural($number)
    {
        $number = abs($number);

        if ($number === 0 || $number === 1) {
            return 0;
        }

        if ($number >= 2 && $number <= 10) {
            return 1;
        }

        return 2;
    }
}
