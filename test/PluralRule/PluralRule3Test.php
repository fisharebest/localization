<?php

namespace Fisharebest\LocalizationTest\PluralRule;

use Fisharebest\Localization\PluralRule\PluralRule3;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the PluralRule3 class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class PluralRule3Test extends TestCase
{
    /**
     * @return void
     */
    public function testNumberOfPluralForms()
    {
        $plural_rule = new PluralRule3();

        self::assertSame(3, $plural_rule->plurals());
    }

    /**
     * @return void
     */
    public function testPluralRules()
    {
        $plural_rule = new PluralRule3();

        self::assertSame(0, $plural_rule->plural(1));
        self::assertSame(0, $plural_rule->plural(21));
        self::assertSame(0, $plural_rule->plural(31));
        self::assertSame(1, $plural_rule->plural(11));
        self::assertSame(1, $plural_rule->plural(111));
        self::assertSame(1, $plural_rule->plural(2));
        self::assertSame(1, $plural_rule->plural(3));
        self::assertSame(1, $plural_rule->plural(4));
        self::assertSame(2, $plural_rule->plural(0));
    }
}
