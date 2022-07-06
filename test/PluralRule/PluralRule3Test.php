<?php

namespace Fisharebest\Localization\PluralRule;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the PluralRule3 class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class PluralRule3Test extends TestCase
{
    /**
     * @return void
     */
    public function testNumberOfPluralForms()
    {
        $plural_rule = new PluralRule3();

        $this->assertSame(3, $plural_rule->plurals());
    }

    /**
     * @return void
     */
    public function testPluralRules()
    {
        $plural_rule = new PluralRule3();

        $this->assertSame(0, $plural_rule->plural(1));
        $this->assertSame(0, $plural_rule->plural(21));
        $this->assertSame(0, $plural_rule->plural(31));
        $this->assertSame(1, $plural_rule->plural(11));
        $this->assertSame(1, $plural_rule->plural(111));
        $this->assertSame(1, $plural_rule->plural(2));
        $this->assertSame(1, $plural_rule->plural(3));
        $this->assertSame(1, $plural_rule->plural(4));
        $this->assertSame(2, $plural_rule->plural(0));
    }
}
