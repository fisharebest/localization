<?php

declare(strict_types=1);

namespace Fisharebest\Localization\PluralRule;

/**
 * Class PluralRule0 - Select a plural form for a specified number.
 * Families:
 * Asian (Chinese, Japanese, Korean, Vietnamese),
 * Persian,
 * Turkic/Altaic (Turkish),
 * Thai,
 * Lao
 * nplurals=1; plural=0;
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class PluralRule0 implements PluralRuleInterface
{
    public function plurals(): int
    {
        return 1;
    }

    public function plural(int $number): int
    {
        return 0;
    }
}
