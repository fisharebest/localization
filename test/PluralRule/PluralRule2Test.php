<?php

namespace Fisharebest\LocalizationTest\PluralRule;

use Fisharebest\Localization\PluralRule\PluralRule2;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the PluralRule2 class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\PluralRule\PluralRule2
 */
class PluralRule2Test extends TestCase
{
    /**
     * @return void
     */
    public function testNumberOfPluralForms()
    {
        $plural_rule = new PluralRule2();

        self::assertSame(2, $plural_rule->plurals());
    }

    /**
     * @return void
     */
    public function testPluralRules()
    {
        $plural_rule = new PluralRule2();

        foreach (array(0, 1) as $n) {
            self::assertSame(0, $plural_rule->plural($n));
        }
        foreach (array(2, 3, 4, 5, 6, 7, 8, 9) as $n) {
            self::assertSame(1, $plural_rule->plural($n));
        }
    }
}
