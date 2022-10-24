<?php

namespace Fisharebest\LocalizationTest\PluralRule;

use Fisharebest\Localization\PluralRule\PluralRule1;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the PluralRule1 class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\PluralRule\PluralRule1
 */
class PluralRule1Test extends TestCase
{
    /**
     * @return void
     */
    public function testNumberOfPluralForms(): void
    {
        $plural_rule = new PluralRule1();

        self::assertSame(2, $plural_rule->plurals());
    }

    /**
     * @return void
     */
    public function testPluralRules(): void
    {
        $plural_rule = new PluralRule1();

        self::assertSame(0, $plural_rule->plural(1));
        foreach (array(0, 2, 3, 4, 5, 6, 7, 8, 9) as $n) {
            self::assertSame(1, $plural_rule->plural($n));
        }
    }
}
