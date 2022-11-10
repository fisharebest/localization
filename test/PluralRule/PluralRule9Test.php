<?php

namespace Fisharebest\LocalizationTest\PluralRule;

use Fisharebest\Localization\PluralRule\PluralRule9;
use PHPUnit\Framework\TestCase;
use RangeException;

/**
 * Tests for the PluralRule9 class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\PluralRule\PluralRule9
 */
class PluralRule9Test extends TestCase
{
    /**
     * @return void
     */
    public function testNumberOfPluralForms(): void
    {
        $plural_rule = new PluralRule9();

        self::assertSame(3, $plural_rule->plurals());
    }

    /**
     * @return void
     */
    public function testPluralRules(): void
    {
        $plural_rule = new PluralRule9();

        self::assertSame(2, $plural_rule->plural(0));
        self::assertSame(0, $plural_rule->plural(1));
        self::assertSame(1, $plural_rule->plural(2));
        self::assertSame(1, $plural_rule->plural(3));
        self::assertSame(1, $plural_rule->plural(4));
        self::assertSame(2, $plural_rule->plural(5));
        self::assertSame(2, $plural_rule->plural(6));
        self::assertSame(2, $plural_rule->plural(7));
        self::assertSame(2, $plural_rule->plural(8));
        self::assertSame(2, $plural_rule->plural(9));
        self::assertSame(2, $plural_rule->plural(10));
        self::assertSame(2, $plural_rule->plural(11));
        self::assertSame(2, $plural_rule->plural(12));
        self::assertSame(2, $plural_rule->plural(13));
        self::assertSame(2, $plural_rule->plural(14));
        self::assertSame(2, $plural_rule->plural(15));
        self::assertSame(2, $plural_rule->plural(20));
        self::assertSame(2, $plural_rule->plural(21));
        self::assertSame(1, $plural_rule->plural(22));
        self::assertSame(1, $plural_rule->plural(23));
        self::assertSame(1, $plural_rule->plural(24));
        self::assertSame(2, $plural_rule->plural(25));
    }

    /**
     * @return void
     */
    public function testNegative(): void
    {
        $this->expectException(RangeException::class);
        $this->expectExceptionMessage('Negative plurals are undefined.');

        $plural_rule = new PluralRule9();
        $plural_rule->plural(-1);
    }
}
