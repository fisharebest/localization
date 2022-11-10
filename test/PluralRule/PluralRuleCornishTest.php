<?php

namespace Fisharebest\LocalizationTest\PluralRule;

use Fisharebest\Localization\PluralRule\PluralRuleCornish;
use PHPUnit\Framework\TestCase;
use RangeException;

/**
 * Tests for the PluralRuleCornish class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\PluralRule\PluralRuleCornish
 */
class PluralRuleCornishTest extends TestCase
{
    /**
     * @return void
     */
    public function testNumberOfPluralForms(): void
    {
        $plural_rule = new PluralRuleCornish();

        self::assertSame(4, $plural_rule->plurals());
    }

    /**
     * @return void
     */
    public function testPluralRules(): void
    {
        $plural_rule = new PluralRuleCornish();

        self::assertSame(3, $plural_rule->plural(0));
        self::assertSame(0, $plural_rule->plural(1));
        self::assertSame(1, $plural_rule->plural(2));
        self::assertSame(2, $plural_rule->plural(3));
        self::assertSame(3, $plural_rule->plural(4));
        self::assertSame(3, $plural_rule->plural(5));
        self::assertSame(3, $plural_rule->plural(6));
        self::assertSame(3, $plural_rule->plural(7));
        self::assertSame(3, $plural_rule->plural(8));
        self::assertSame(3, $plural_rule->plural(9));
        self::assertSame(3, $plural_rule->plural(10));
        self::assertSame(3, $plural_rule->plural(11));
        self::assertSame(3, $plural_rule->plural(12));
        self::assertSame(3, $plural_rule->plural(13));
        self::assertSame(3, $plural_rule->plural(14));
        self::assertSame(3, $plural_rule->plural(15));
        self::assertSame(3, $plural_rule->plural(16));
        self::assertSame(3, $plural_rule->plural(17));
        self::assertSame(3, $plural_rule->plural(18));
        self::assertSame(3, $plural_rule->plural(19));
        self::assertSame(3, $plural_rule->plural(20));
        self::assertSame(3, $plural_rule->plural(21));
        self::assertSame(3, $plural_rule->plural(22));
        self::assertSame(3, $plural_rule->plural(23));
        self::assertSame(3, $plural_rule->plural(24));
        self::assertSame(3, $plural_rule->plural(25));
        self::assertSame(3, $plural_rule->plural(26));
        self::assertSame(3, $plural_rule->plural(27));
        self::assertSame(3, $plural_rule->plural(28));
        self::assertSame(3, $plural_rule->plural(29));
    }

    /**
     * @return void
     */
    public function testNegative(): void
    {
        $this->expectException(RangeException::class);
        $this->expectExceptionMessage('Negative plurals are undefined.');

        $plural_rule = new PluralRuleCornish();
        $plural_rule->plural(-1);
    }
}
