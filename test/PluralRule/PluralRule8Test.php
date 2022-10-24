<?php

namespace Fisharebest\LocalizationTest\PluralRule;

use Fisharebest\Localization\PluralRule\PluralRule8;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the PluralRule8 class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\PluralRule\PluralRule8
 */
class PluralRule8Test extends TestCase
{
    /**
     * @return void
     */
    public function testNumberOfPluralForms(): void
    {
        $plural_rule = new PluralRule8();

        self::assertSame(3, $plural_rule->plurals());
    }

    /**
     * @return void
     */
    public function testPluralRules(): void
    {
        $plural_rule = new PluralRule8();

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
    }
}
