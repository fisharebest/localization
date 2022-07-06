<?php

namespace Fisharebest\Localization\PluralRule;

use PHPUnit\Framework\TestCase;

/**
 * Tests for the PluralRule0 class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class PluralRule0Test extends TestCase
{
    /**
     * @return void
     */
    public function testNumberOfPluralForms()
    {
        $plural_rule = new PluralRule0();

        $this->assertSame(1, $plural_rule->plurals());
    }

    /**
     * @return void
     */
    public function testPluralRules()
    {
        $plural_rule = new PluralRule0();

        foreach (array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9) as $n) {
            $this->assertSame(0, $plural_rule->plural($n));
        }
    }
}
