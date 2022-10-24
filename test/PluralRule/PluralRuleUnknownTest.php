<?php

namespace Fisharebest\LocalizationTest\PluralRule;

use DomainException;
use Fisharebest\Localization\PluralRule\PluralRuleUnknown;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the PluralRuleUnknown class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 *
 * @covers \Fisharebest\Localization\PluralRule\PluralRuleUnknown
 */
class PluralRuleUnknownTest extends TestCase
{
    /**
     * @return void
     */
    public function testNumberOfPluralForms(): void
    {
        $plural_rule = new PluralRuleUnknown();

        try {
            $plural_rule->plurals();
        } catch (DomainException $ex) {
            self::assertSame('No plural rule defined for this language', $ex->getMessage());
        }
    }

    /**
     * @return void
     */
    public function testPluralRules(): void
    {
        $plural_rule = new PluralRuleUnknown();

        try {
            $plural_rule->plural(1);
        } catch (DomainException $ex) {
            self::assertSame('No plural rule defined for this language', $ex->getMessage());
        }
    }
}
