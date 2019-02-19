<?php

namespace Fisharebest\Localization\PluralRule;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Tests for the PluralRule6 class
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2019 Greg Roach
 * @license   GPLv3+
 */
class PluralRule6Test extends TestCase
{
    /**
     * @return void
     */
    public function testNumberOfPluralForms()
    {
        $plural_rule = new PluralRule6();

        $this->assertSame(3, $plural_rule->plurals());
    }

    /**
     * @return void
     */
    public function testPluralRules()
    {
        $plural_rule = new PluralRule6();

        $this->assertSame(2, $plural_rule->plural(0));
        $this->assertSame(0, $plural_rule->plural(1));
        $this->assertSame(1, $plural_rule->plural(2));
        $this->assertSame(1, $plural_rule->plural(3));
        $this->assertSame(1, $plural_rule->plural(4));
        $this->assertSame(1, $plural_rule->plural(5));
        $this->assertSame(1, $plural_rule->plural(6));
        $this->assertSame(1, $plural_rule->plural(7));
        $this->assertSame(1, $plural_rule->plural(8));
        $this->assertSame(1, $plural_rule->plural(9));
        $this->assertSame(2, $plural_rule->plural(10));
        $this->assertSame(2, $plural_rule->plural(11));
        $this->assertSame(2, $plural_rule->plural(12));
        $this->assertSame(2, $plural_rule->plural(13));
        $this->assertSame(2, $plural_rule->plural(14));
        $this->assertSame(2, $plural_rule->plural(15));
        $this->assertSame(2, $plural_rule->plural(16));
        $this->assertSame(2, $plural_rule->plural(17));
        $this->assertSame(2, $plural_rule->plural(18));
        $this->assertSame(2, $plural_rule->plural(19));
        $this->assertSame(2, $plural_rule->plural(20));
        $this->assertSame(0, $plural_rule->plural(21));
        $this->assertSame(1, $plural_rule->plural(22));
        $this->assertSame(1, $plural_rule->plural(23));
        $this->assertSame(1, $plural_rule->plural(24));
        $this->assertSame(1, $plural_rule->plural(25));
        $this->assertSame(1, $plural_rule->plural(26));
        $this->assertSame(1, $plural_rule->plural(27));
        $this->assertSame(1, $plural_rule->plural(28));
        $this->assertSame(1, $plural_rule->plural(29));
    }
}
