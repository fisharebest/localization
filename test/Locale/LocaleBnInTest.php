<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBn;
use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Script\ScriptBeng;
use Fisharebest\Localization\Territory\TerritoryIn;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the LocaleBnIn class
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleBnInTest extends TestCase
{
    /**
     * Test the properties
     */
    public function testProperties()
    {
        $locale = new LocaleBnIn();

        $this->assertEquals(new LanguageBn(), $locale->language());
        $this->assertEquals(new PluralRule2(), $locale->pluralRule());
        $this->assertEquals(new ScriptBeng(), $locale->script());
        $this->assertEquals(new TerritoryIn(), $locale->territory());
        $this->assertNull($locale->variant());
        $this->assertSame('bn_IN', $locale->code());
        $this->assertSame('unicode_ci', $locale->collation());
        $this->assertSame('০১২৩৪৫৬৭৮৯', $locale->digits('0123456789'));
        $this->assertSame('lang="bn-IN"', $locale->htmlAttributes());
        $this->assertSame('bn-IN', $locale->languageTag());
        $this->assertSame('-১২৩', $locale->number(-123));
        $this->assertSame('১,২৩,৪৫,৬৭৮.০৯', $locale->number(12345678.09));
        $this->assertSame('১,২৩৪.৫৬%', $locale->percent(12.3456));
    }
}
