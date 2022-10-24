<?php

namespace Fisharebest\LocalizationTest\PluralRule;

use Fisharebest\Localization\PluralRule\PluralRuleFilipino;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the PluralRuleFilipino class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\PluralRule\PluralRuleFilipino
 */
class PluralRuleFilipinoTest extends TestCase
{
    /**
     * @return void
     */
    public function testNumberOfPluralForms(): void
    {
        $plural_rule = new PluralRuleFilipino();

        self::assertSame(2, $plural_rule->plurals());
    }

    /**
     * @return void
     */
    public function testPluralRules(): void
    {
        $plural_rule = new PluralRuleFilipino();

        self::assertSame(0, $plural_rule->plural(0));
        self::assertSame(0, $plural_rule->plural(1));
        self::assertSame(0, $plural_rule->plural(2));
        self::assertSame(0, $plural_rule->plural(3));
        self::assertSame(1, $plural_rule->plural(4));
        self::assertSame(0, $plural_rule->plural(5));
        self::assertSame(1, $plural_rule->plural(6));
        self::assertSame(0, $plural_rule->plural(7));
        self::assertSame(0, $plural_rule->plural(8));
        self::assertSame(1, $plural_rule->plural(9));
        self::assertSame(0, $plural_rule->plural(10));
        self::assertSame(0, $plural_rule->plural(11));
        self::assertSame(0, $plural_rule->plural(12));
        self::assertSame(0, $plural_rule->plural(13));
        self::assertSame(1, $plural_rule->plural(14));
        self::assertSame(0, $plural_rule->plural(15));
        self::assertSame(1, $plural_rule->plural(16));
        self::assertSame(0, $plural_rule->plural(17));
        self::assertSame(0, $plural_rule->plural(18));
        self::assertSame(1, $plural_rule->plural(19));
    }
}
