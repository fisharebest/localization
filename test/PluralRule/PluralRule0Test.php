<?php

namespace Fisharebest\LocalizationTest\PluralRule;

use Fisharebest\Localization\PluralRule\PluralRule0;
use PHPUnit\Framework\TestCase;
use RangeException;

/**
 * Tests for the PluralRule0 class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\PluralRule\PluralRule0
 */
class PluralRule0Test extends TestCase
{
    /**
     * @return void
     */
    public function testNumberOfPluralForms(): void
    {
        $plural_rule = new PluralRule0();

        self::assertSame(1, $plural_rule->plurals());
    }

    /**
     * @return void
     */
    public function testPluralRules(): void
    {
        $plural_rule = new PluralRule0();

        foreach ([0, 1, 2, 3, 4, 5, 6, 7, 8, 9] as $n) {
            self::assertSame(0, $plural_rule->plural($n));
        }
    }

    /**
     * @return void
     */
    public function testNegative(): void
    {
        $this->expectException(RangeException::class);
        $this->expectExceptionMessage('Negative plurals are undefined.');

        $plural_rule = new PluralRule0();
        $plural_rule->plural(-1);
    }
}
