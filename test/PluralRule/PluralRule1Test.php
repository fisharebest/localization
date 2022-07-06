<?php

namespace Fisharebest\Localization\PluralRule;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the PluralRule1 class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class PluralRule1Test extends TestCase
{
    /**
     * @return void
     */
    public function testNumberOfPluralForms()
    {
        $plural_rule = new PluralRule1();

        $this->assertSame(2, $plural_rule->plurals());
    }

    /**
     * @return void
     */
    public function testPluralRules()
    {
        $plural_rule = new PluralRule1();

        $this->assertSame(0, $plural_rule->plural(1));
        foreach (array(0, 2, 3, 4, 5, 6, 7, 8, 9) as $n) {
            $this->assertSame(1, $plural_rule->plural($n));
        }
    }
}
